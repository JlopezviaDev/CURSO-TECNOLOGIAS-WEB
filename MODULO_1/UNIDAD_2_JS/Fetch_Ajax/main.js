const lista = document.getElementById('lista');

function dameHTML(item) {
    //  alert()
    return [
        '<li>' + item.userId, ", "
        + item.id, ", "
        + item.title, ", "
        + item.body, "</li>"];
}
async function positivo(res) {

    let response = await res.json();
    console.log(res)
    if (res.ok) {
      /*  response.forEach(element => {
     
            lista.innerHTML += '<li>' + element.userId + ", "
                + element.id +  ", "
                + element.title + ", "
                + element.body + "</li>"
        });*/
           let html = response.map(dameHTML);
           lista.innerHTML = html;
    } else {
        console.log(response);
        //  errDatos('status code: ' + response.status);
    }
}
function errDatos(err) {
    // console.log(err);

}
fetch("https://jsonplaceholder.typicode.com/posts").
    then(positivo).
    catch(errDatos)
