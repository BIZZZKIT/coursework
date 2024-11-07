import axios from "axios";

export default function submitForm(formData) {
    try {
        const response =  axios.post('http://127.0.0.1:8000/api/clients', formData);
        console.log(formData);
    } catch (error) {
        console.error('Ошибка отправки формы:', error);
    }
}