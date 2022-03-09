<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/frontend/registration.css">
    <style>
        .alert {
            width: 500px;
            float: center;
            z-index: 500;
        }

    </style>
</head>

<body>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="navbar-text">
                <h1>Basic Sustainability Toolkit (BSAT)</h1>
            </span>
            <a class="navbar-brand" href="/"><img
                    src="https://futurefitbusiness.org/wp-content/uploads/2019/04/sustainability-advantage.png"
                    width="140" height="50"></a>
            </button>
        </div>
        </div>
    </nav><br>

    <div class="container">
        <h2>Organization Profile</h2>
        <hr>
        <p>This is basic information about the organization.
            (Replace all sample data with real organization data.)</p><br>
        <div id="bsat" class="row g-3">
            Name: <input type="text" name="name" id="name" required textarea class="form-control"
                aria-label="With textarea" placeholder="Organization Name"><br>
            Date Founded: <input type="date" name="datefounded" id="datefounded" required textarea class="form-control"
                aria-label="With textarea"><br>
            Address: <input type="text" name="address" id="address" required="" textarea class="form-control"
                aria-label="With textarea" placeholder="Organization address"><br>
            Phone Number: <input type="number" id="phone" name="phonenumber" min="10" required textarea
                class="form-control" aria-label="With textarea"><br>
            Website: <input type="text" name="website" id="website" textarea class="form-control"
                aria-label="With textarea" placeholder="www.xyx.com"><br>
            Sector: <input type="text" name="sector" id="sector" required textarea class="form-control"
                aria-label="With textarea"><br>
            Brief Description: <input type="text" name="details" id="details" required textarea class="form-control"
                aria-label="With textarea"><br>
            Total revenue/ Income in reporting year: <input type="text" name="revenue" required textarea
                class="form-control" aria-label="With textarea"><br>
            Total number of full-time employees: <input type="number" id="oc12a" name="fullemployees" required=""
                textarea class="form-control" aria-label="With textarea"><br>
            Number of part-time employees: <input type="number" id="oc13a" name="partemployees" required="" textarea
                class="form-control" aria-label="With textarea"><br>


            <button onclick="orgpro()"> Click here to calculate the % Workforce</button> <br>

            % of workforce: <p id="od13a"></p><br>


            Indicate ownership by equity-seeking populations: <input type="text" name="workforce" required textarea
                class="form-control" aria-label="With textarea"
                placeholder=" (e.g. women, indigenous peoples, LGBTQ2+ community, etc.)"><br>
            Organization officer / director who vouches for the integrity of the completed assessment. <input
                type="text" name="name" required textarea class="form-control" aria-label="With textarea"
                placeholder="(Name, position, contact information)"><br>
            3rd party verifier of the methodology and data
            used in the answers in the completed assessment: <input type="text" name="name" required textarea
                class="form-control" aria-label="With textarea"
                placeholder="(Name, position, contact information)"><br>

            <button class="btn btn-outline-primary" onclick="createItem()">SAVE</button>
        </div>

    </div>
    </div><br>

    <nav class="page">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="/">Previous</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">Current Page</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="/governance">Next</a>
            </li>
        </ul>
    </nav>

    <script src="/frontend/registration.js" charset="utf-8"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<footer>

</footer>

</html>
