// este archi tendra operaciones tipicas para comunicarse con el servidor

//getProductos
const getProductos = async () => {
    let resp = await axios.get("api/productos/get");
    return resp.data;
};

const crearProducto = async (producto) => {
    let resp = await axios.post("api/productos/post", producto, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;

};