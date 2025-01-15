function setFecha(id) {
    const now = new Date();
    const formatted = now.toISOString().slice(0, 19).replace('T', ' ');
    document.getElementById(id).value = formatted;
}
