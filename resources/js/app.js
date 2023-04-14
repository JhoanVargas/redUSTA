import './bootstrap';
import Dropzone from 'dropzone';

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage:"Carga tu imagen aqui",
    acceptedFiles:".png, .jpg, .jpge, .gif",
    addRemoveLinks:true,
    dictRemoveFile:"Eliminar archivos",
    maxFiles:1,
    uploadMultiple:false,
});

dropzone.on("success", function (file,response){
    document.querySelector('[name = "imagen"]').value = response.imagen;
});

dropzone.on("remove", function(file, message){
    document.querySelector('[name = "imagen"]').value = "";
});