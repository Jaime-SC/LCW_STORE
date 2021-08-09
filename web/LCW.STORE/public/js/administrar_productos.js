const cargarTipos = async () => {
    //1. Ir a buscar las marcas a la api
    let resultado = await axios.get("api/tipos/get");
    //2. Cargar las marcas dentro del select
    let tipos = resultado.data;
    let tipoSelect = document.querySelector("#tipo-select");
    tipos.forEach(m => {
        let option = document.createElement("option");
        option.innerText = m;
        tipoSelect.appendChild(option);
    });
};

const cargarTallas = async () => {
    //1. Ir a buscar las marcas a la api
    let resultado = await axios.get("api/tallas/get");
    //2. Cargar las marcas dentro del select
    let tallas = resultado.data;
    let tallaSelect = document.querySelector("#talla-select");
    tallas.forEach(i => {
        let option = document.createElement("option");
        option.innerText = i;
        tallaSelect.appendChild(option);
    });
};

document.addEventListener("DOMContentLoaded", async () => {
    let productos = await getProductos();
    cargarTipos();
    cargarTallas();
    cargarTabla(productos);

});

const iniciarEliminacion = async function () {
    //1. Obtener el id a eliminar
    let id = this.idProducto;
    let resp = await Swal.fire({ title: "Esta Seguro?", text: "Esta operacion es irreversible", icon: "error", showCancelButton: true });
    if (resp.isConfirmed) {
        //1. Eliminar
        if (await eliminarProducto(id)){
            //2. Si la eliminacion fue existosa, recargar la tabla
            let productos = await getProductos();
            cargarTabla(productos);
            Swal.fire("Producto Eliminado", "Producto eliminado exitosamente", "info");
        }else {
            //3. Si no fue exitosa, mostrar un mensaje de error
            Swal.fire("Error", "No se pudo atender la solicitud", "error");

        }
    } else {
        Swal.fire("Cancelado", "Cancelado a peticion del usuario", "info");
    }
};

const cargarTabla = (productos) => {
    //1. obtener referencia al cuerpo de la tabla
    let tbody = document.querySelector("#tbody-inventario");
    tbody.innerHTML = "";
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
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn", "btn-danger");
        botonEliminar.idProducto = productos[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
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





document.querySelector("#registrar-btn").addEventListener("click", async () => {
    let nombre = document.querySelector("#nombre-txt").value;
    let tipo = document.querySelector("#tipo-select").value;
    let talla = document.querySelector("#talla-select").value;
    let cantidad = document.querySelector("#cantidad-txt").value;
    let producto = {};
    producto.nombre = nombre;
    producto.tipo = tipo;
    producto.talla = talla;
    producto.cantidad = cantidad;
    //1. va al controlador le pasa los datos
    //2. el controlador crea el modelo
    //3. el modelo ingresa a la base de datos
    //4. Todos felices
    let res = await crearProducto(producto);
    await Swal.fire('Producto Creado', 'Creada exitosamente', 'success');
    window.location.href = "administrar_productos";



});