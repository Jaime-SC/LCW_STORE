const cargarProductos = async()=>{
    //1. Ir a buscar las marcas a la api
    let resultado = await axios.get("api/productos/get");
    console.log(resultado.data);
    //2. Cargar las marcas dentro del select
    let productos = resultado.data;
    let productoSelect = document.querySelector("#producto-select");
    productos.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        productoSelect.appendChild(option);
    });

};

cargarProductos();