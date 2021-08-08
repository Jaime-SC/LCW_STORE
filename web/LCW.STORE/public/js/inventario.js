
const cargarTabla = (productos) => {
    //1. obtener referencia al cuerpo de la tabla
    let tbody = document.querySelector("#tbody-inventario");
    //2. Recirrer todas los productos
    for (let i = 0; i < productos.length; ++i) {
        //3. Por cada producto generar una fila
        let tr = document.createElement("tr");
        //4. Generar por cada atributo de la consola, un td

        let tdNombre = document.createElement("td");
        tdNombre.innerText = productos[i].nombre;
        let tdTipo = document.createElement("td");
        tdTipo.innerText = productos[i].tipo;

        let tdTalla = document.createElement("td");
        tdTalla.innerText = productos[i].talla;

        let tdCantidad = document.createElement("td");
        tdCantidad.innerText = productos[i].cantidad;
        let tdAcciones = document.createElement("td");

        let botonEliminar = document.createElement("button");
        botonEliminar.innerText="Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idProducto =productos[i].id;
        tdAcciones.appendChild(botonEliminar);



        //5. Agregar los td al tr
        tr.appendChild(tdNombre);
        tr.appendChild(tdTipo);

        tr.appendChild(tdTalla);

        tr.appendChild(tdCantidad);
        tr.appendChild(tdAcciones);

        //6. Agregar los tr al cuerpo de la tabla
        tbody.appendChild(tr);



    }
};


document.addEventListener("DOMContentLoaded", async () => {
    let productos = await getProductos();
    console.log(productos);
    cargarTabla(productos);
});
