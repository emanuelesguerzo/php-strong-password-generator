function copyToClipboard() {
    const passwordElement = document.querySelector(".result");
    const passwordText = passwordElement.textContent;

    navigator.clipboard.writeText(passwordText).then(() => {
        alert("Password copiata negli appunti!");
    }).catch(err => {
        console.error("Errore durante la copia:", err);
    });
}
