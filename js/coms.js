import { io } from './socket.io'
const socket = io("http://192.168.0.155:8080");
socket.emit("message","Salut je suis connecté !");
function coms(action){
    if (action == "refresh"){
        socket.emit("refresh","html", (response) => {
            if (response == null){
                console.log("Aucun nouveau com sur larticle html.")
            }
        });
    }else{
        console.error("???")
    }
}