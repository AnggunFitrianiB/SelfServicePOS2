<html>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <body>
        <h2>Edit Produk</h2>
        <hr>
        <form action="{{ URL('produk/' . $produk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <table>
                <tr>
                    <th>Produk</th>
                    <td>
                        <input type="text" name="produk" value="{{ $produk->produk }}" required>
                    </td>
                </tr>

                <tr>
                    <th>Price</th>
                    <td>
                        <input type="number" name="price" value="{{ $produk->price }}" required>
                    </td>
                </tr>

                <tr>
                    <th>Stock</th>
                    <td>
                        <input type="number" name="stock" value="{{ $produk->stock }}" required>
                    </td>
                </tr>
            </table>

            <button type="submit">Update</button>
        </form>
    </body>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>