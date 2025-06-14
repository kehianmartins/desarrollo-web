const reproductor = {
    reproducir : function(id) {
        console.log(`Reproduciendo canción de ID: ${id}`);
    },
    pausar : function() {
        console.log('Pausando...');
    },
    crearPlaylist : function(nombre) {
        console.log(`Creando la playlist: ${nombre}`);
    },
    reproducirPlaylist : function(nombre) {
        console.log(`Reproduciendo la playlist: ${nombre}`);
    }
}

reproductor.borrarCancion = function(id) {
    console.log(`Eliminando la canción: ${id}`);
} // Se agreaga el método borrarCanción

reproductor.reproducir(3921); // llamar al método del bojeto reproductor
reproductor.pausar();
reproductor.borrarCancion();
reproductor.crearPlaylist('Música 2025');
reproductor.reproducirPlaylistPlaylist('Música 2025');