<?php

namespace App\Http\Controllers;
use App\Models\Portfolio;
use Illuminate\Http\Request;


class PortfolioController extends Controller
{
    public function createElement(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'title_text' => 'required|string|max:255',
                'description' => 'required|string',
                'link' => 'nullable|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $imagePath = $request->file('image')->store('images', 'public');

            $portfolio = Portfolio::create([
                'title_text' => $validatedData['title_text'],
                'description' => $validatedData['description'],
                'link' => $validatedData['link'],
                'image' => $imagePath,
            ]);

            return response()->json($portfolio);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getElements()
    {
        $portfolioElements = Portfolio::all();

        return response()->json([
           'elements' => $portfolioElements
        ]);
    }
}
