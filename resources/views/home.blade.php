<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('../assets/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/css/bars-movie.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>
</head>

<body>

    <div class="container2">
        <div class="title2">
            <div class="label1">
                <p>Daftar Product</p>
            </div>
            <div class="actions2">
                <div class="button-group2">
                    <p class="label">Yuk, Coba buat <br> Pelengkap</p>
                    
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="button-group3">
                    <i class="fa-solid fa-box-archive"></i>
                </div>
                <div class="dropdown">
                    <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-offset="0,0">
                        <p> Atur Sekaligus </p>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Produk Terjual</a></li>
                    </ul>
                </div>
                <div class="button-add">
                    <p>+ Tambah Product</p>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="wrapper">

        <ul class="top-navigation">
            <li>
                <a class="activate" href="#">Semua Produk</a>
            </li>
            <li>
                <a href="#">Nonaktif</a>
            </li>
        </ul>


        <div class="d1">

            <div class="input">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" placeholder="Cari nama produk atau SKU">
            </div>

            <span>

                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-offset="0,0">
                        Filter
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                                Submenu <i class="fa-solid fa-chevron-right"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <a class="dropdown-item" href="#">
                                    <div class="form-check d-flex gap-4 align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                        <label class="form-check-label" for="Checkme1">Check me</label>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="form-check d-flex gap-4 align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                        <label class="form-check-label" for="Checkme1">Check me</label>
                                    </div>
                                </a>
                            </ul>
                        </li>

                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                                Submenu <i class="fa-solid fa-chevron-right"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <a class="dropdown-item" href="#">
                                    <div class="form-check d-flex gap-4 align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                        <label class="form-check-label" for="Checkme1">Check me</label>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="form-check d-flex gap-4 align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                        <label class="form-check-label" for="Checkme1">Check me</label>
                                    </div>
                                </a>
                            </ul>
                        </li>

                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                                Submenu <i class="fa-solid fa-chevron-right"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-submenu">
                                <a class="dropdown-item" href="#">
                                    <div class="form-check d-flex gap-4 align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                        <label class="form-check-label" for="Checkme1">Check me</label>
                                    </div>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="form-check d-flex gap-4 align-items-center">
                                        <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                        <label class="form-check-label" for="Checkme1">Check me</label>
                                    </div>
                                </a>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-offset="0,0">
                        Etalase
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Produk Terjual</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                    </button>
                    <ul class="dropdown-menu scrollable">
                        <a class="dropdown-item" href="#">
                            <div class="form-check d-flex gap-4 align-items-center">
                                <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                <label class="form-check-label" for="Checkme1">Check me</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="form-check d-flex gap-4 align-items-center">
                                <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                <label class="form-check-label" for="Checkme1">Check me</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="form-check d-flex gap-4 align-items-center">
                                <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                <label class="form-check-label" for="Checkme1">Check me</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="form-check d-flex gap-4 align-items-center">
                                <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                <label class="form-check-label" for="Checkme1">Check me</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="form-check d-flex gap-4 align-items-center">
                                <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                <label class="form-check-label" for="Checkme1">Check me</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="form-check d-flex gap-4 align-items-center">
                                <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                <label class="form-check-label" for="Checkme1">Check me</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="form-check d-flex gap-4 align-items-center">
                                <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                <label class="form-check-label" for="Checkme1">Check me</label>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="form-check d-flex gap-4 align-items-center">
                                <input class="form-check-input" type="checkbox" value="" id="Checkme1" />
                                <label class="form-check-label" for="Checkme1">Check me</label>
                            </div>
                        </a>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Urutkan
                    </button>
                    <ul class="dropdown-menu scrollable">
                        <li><a class="dropdown-item" href="#">Placeholder</a></li>
                        <li><a class="dropdown-item" href="#">Placeholder</a></li>
                        <li><a class="dropdown-item" href="#">Placeholder</a></li>
                        <li><a class="dropdown-item" href="#">Placeholder</a></li>
                        <li><a class="dropdown-item" href="#">Placeholder</a></li>
                        <li><a class="dropdown-item" href="#">Placeholder</a></li>
                        <li><a class="dropdown-item" href="#">Placeholder</a></li>
                    </ul>
                </div>

            </span>

        </div>

        <div class="d2">

            <table>
                <tr>
                    <th><input type="checkbox" name="" id="checkbox-custom"></th>
                    <th>INFO PRODUK <i class="fa-solid fa-sort"></i></th>
                    <th>STATISTIK</th>
                    <th>HARGA <i class="fa-solid fa-sort"></i></th>
                    <th>STOK <i class="fa-solid fa-sort"></i></th>
                    <th>AKTIF</th>
                </tr>

                <tr>
                    <td><input type="checkbox" name="" id="checkbox-custom"></td>
                    <td>
                        <div class="info-produk">
                            <img src="https://cdn.pixabay.com/photo/2023/07/24/01/31/plane-8145957_1280.jpg" alt="">
                            <div>
                                <p><strong>Item Name</strong>
                                    <br>
                                    SKU :
                                </p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="selected-value">
                            Skor : Baik <i class="fa-solid fa-circle-info"></i>
                        </p>
                        <select name="" class="example">
                            <option value="1" class="hidden">Buruk</option>
                            <option value="2" class="hidden">Cukup</option>
                            <option value="3" class="hidden">Normal</option>
                            <option value="4" class="hidden">Baik</option>
                            <option value="5" class="hidden">Sempurna</option>
                        </select>
                        <div>
                            <i class="fa-regular fa-eye"></i>
                            <p>0</p>
                            <i class="fa-solid fa-bag-shopping"></i>
                            <p>0</p>
                        </div>
                    </td>
                    <td>
                        <span>
                            <div><strong>Rp</strong></div>
                            <input type="number">
                        </span>
                    </td>
                    <td>
                        <input class="num" type="number">
                    </td>
                    <td>
                        <div class="form-check form-switch form-switch-md">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </td>
                    <td>
                        <div class="dropdown-last">
                            <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false" data-bs-offset="0,0">
                                Atur
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">placeholder</a></li>
                                <li><a class="dropdown-item" href="#">placeholder</a></li>
                                <li><a class="dropdown-item" href="#">placeholder</a></li>
                                <li>
                                    <hr>
                                </li>
                                <li><a class="dropdown-item" href="#">placeholder</a></li>
                                <li><a class="dropdown-item" href="#">placeholder</a></li>
                                <li><a class="dropdown-item" href="#">placeholder</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>




            </table>

        </div>

    </div>

</body>


<script type="text/javascript">
    $(function () {
        function ratingEnable() {
            $('.example').barrating('show', {
                theme: 'bars-movie',
                initialRating: '4'
            });
        }
        ratingEnable();
    });

    $('.example').on('change', function () {
        var selectedText = $(this).find('option:selected').html(); // Use .html() instead of .text()
        $('.selected-value').html('Skor: ' + selectedText + ' <i class="fa-solid fa-circle-info"></i>');
    });

</script>

</html>
