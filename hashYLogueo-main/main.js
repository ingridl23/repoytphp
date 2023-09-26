document.querySelector("#miForm").addEventListener('submit', function (e) { enviar(e, this) });
async function enviar(e, esto) {
    e.preventDefault();
    
    const data = new URLSearchParams(new FormData(esto));
    try {
        let promesa = await fetch('ingreso.php', {
            method: 'post',
            body: data,
        });

        if (promesa.ok) {
            let texto = await promesa.text();
            document.getElementById('miDi').innerHTML = texto; 
        }
    } catch (e) {
    }
}
document.getElementById('btn').addEventListener('click', botonear);
async function botonear(){
    try {
        let promesa = await fetch('ingreso.php?modificar=true', {
            method: 'get',
        });

        if (promesa.ok) {
            let texto = await promesa.text();
            document.getElementById('miDi').innerHTML = texto; 
        }
    } catch (e) {
    }

}