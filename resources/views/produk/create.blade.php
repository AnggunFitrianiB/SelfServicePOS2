<html>
    <title>create produk</title>
     <!-- Include Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <body>
        <h2>create produk</h2>
        <hr>
        <form action="{{ URL('produk') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <table>
                <tr>
                    <th>produk</th>
                    <td>
                        <input type="text" name="produk" required placeholder="Nama Produk">
                    </td>
                </tr>

                <tr>
                    <th>price</th>
                    <td>
                        <input type="number" name="price" required placeholder="Harga Produk">
                    </td>
                </tr>

                <tr>
                    <th>stock</th>
                    <td>
                        <input type="number" name="stock" required placeholder="Stok Produk">
                    </td>
                </tr>
                 </table>
                 <button type="submit">save</button> 
            </form>
        </body>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </html>