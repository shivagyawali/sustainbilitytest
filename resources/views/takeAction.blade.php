<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Take Action</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/frontend/SDG scores.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <style>
        .alert {
            width: 500px;
            float: center;
            z-index: 500;
        }

    </style>
</head>

<body onload="onLoad()  ">
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
            <a class="navbar-brand" href="https://sustainabilityadvantage.com/"><img
                    src="https://futurefitbusiness.org/wp-content/uploads/2019/04/sustainability-advantage.png"
                    width="140" height="50"></a>
            </button>
        </div>
        </div>
    </nav><br>
    <h1 class="purple1">Take Action</h1>
    <p class="para1">The results of this assessment can be used for more than disclosing and reporting on the
        organization's sustainability performance. They can also be used to guide if / where the organization plans to
        improve.</p>

    <h1 class="purple1">Prioritization for Action</h1>
    <p class="para1">
        It is unlikely that an organization will undertake improvements on its scores all at once. Several
        stakeholder-related factors usually are taken into consideration when determining which should be prioritized
        for
        action. If particular issues are important to key stakeholders, they are important to the organization and
        should be
        prioritized for action.<br>

        * Issues which the organization's senior management deem to be critical to achieving the organization's purpose
        and
        strategic plan / goals. <br>

        * Issues of particular interest to lender's / banker's because they affect the organization's risk profile and
        eligibility for preferential treatment.
        (e.g., sustainability-linked loans may give weight to climate change related issues.)<br>

        * Issues that important customers / buyers deem to be high-priority ESG issues, as emphasized in their
        requirement
        to disclose your organization's enterprise-level sustainability impacts, in their requests for proposals (RFPs).
        (e.g. sustainable procurement requires suppliers to disclose their enterprise-level sustainability
        performance)<br>

        * Issues that could significantly affect the organization's image / reputation / brand value, or already
        have.<br>

        * Issues that are of most interest to investors, depending on the organization's industry sector.
        (e.g., as indicated by the SASB Materiality Map, at the link below) <br>

        * Issues of most interest to governments, foundations, and raters / rankers.<br>
        <a href="https://sustainabilityadvantage.com/slides/">Sustainability Accounting Standards Board(SASB)
            Materiality
            Map</a><br>
    </p>

    </div>
    <div class="table2">
        <h2> Resources for Action </h2>
        <p>There are hundreds of books, websites and advisors that can help with whatever the organization decides to
            improve. These are just the tip of the iceberg.</p>
        <table id="mappingESG">

            <tr>

                <td>Future-Fit Business Benchmark Action Guides for potential actions / projects on prioritized issues.
                </td>
                <td><a href="https://futurefitbusiness.org/downloads-resources/">Future-Fit Business Benchmark Action
                        Guides</a>
                </td>
            </tr>
            <tr>

                <td>Sustainability ROI Workbook for preparing CFO-friendly cost-benefit justifications of projects that
                    would
                    improve performance on prioritized issues.</td>
                <td><a href="https://sustainabilityadvantage.com/businesscases/project-level-business-case/">Sustainability
                        ROI
                        Workbook</a></td>

            </tr>
            <tr>

                <td>The Sustainability Champion's Guidebook and video for how to lead an organization toward a more
                    sustainable
                    business model, even you are not a senior manager.</td>
                <td><a href="https://sustainabilityadvantage.com/leadership/leading-change/">Sustainability Champion's
                        Guidebook</a></td>

            </tr>
            <tr>
                <td>Master Slide Decks of hundreds of ready-to-use slides on all the above, for use internally and
                    externally to
                    explain, and help justify, what the organization needs to do, why, and how.</td>
                <td><a href="https://sustainabilityadvantage.com/slides/">Sustainability Advantage Master Slide
                        Decks</a></td>
            </tr>
        </table>
    </div>

    <nav class="page">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="/capitalscores">Previous</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">Current Page</span>
            </li>
            <li class="page-item">
                <!-- <a class="page-link" href="#">Next</a> -->
            </li>
        </ul>
    </nav>
    <form action="/store" method="post">
        @csrf
        <input type="hidden" id="name" name="name">
        <input type="hidden" id="address" name="address">
        <input type="hidden" id="phone" name="phone">
        <input type="hidden" id="details" name="details">
        <input type="hidden" id="sector" name="sector">
        <input type="hidden" id="fullemployees" name="fullemployees">
        <input type="hidden" id="partemployees" name="partemployees">
        <input type="hidden" id="workforce" name="workforce">
        <input type="hidden" id="datefounded" name="datefounded">

        <input type="hidden" id="govItem" name="govItem">
        <input type="hidden" id="piItem" name="piItem">
        <input type="hidden" id="encItem" name="encItem">
        <input type="hidden" id="epItem" name="epItem">
        <input type="hidden" id="disItem" name="disItem">
        <input type="hidden" id="termItem" name="termItem">
        <input type="hidden" id="wasItem" name="wasItem">
        <input type="hidden" id="watItem" name="watItem">
        <input type="hidden" id="nghgItem" name="nghgItem">
        <input type="hidden" id="eneItem" name="eneItem">
        <input type="hidden" id="hItem" name="hItem">
        <input type="hidden" id="wagItem" name="wagItem">
        <input type="hidden" id="ghgItem" name="ghgItem">
        <input type="hidden" id="proItem" name="proItem">

        <button class="btn btn-warning justify-center" type="submit">Save ALL Records To
            Database</button>
    </form>


    <script src="/frontend/sdgscores.js" charset="utf-8"></script>
    <script src="/frontend/discrimination.js" charset="utf-8"></script>
    <script src="/frontend/charts1.js" charset="utf-8"></script>

    <script>
        function onLoad() {
            var name = localStorage.getItem("name");
            document.getElementById("name").value = name;

            var datefounded = localStorage.getItem("datefounded");
            document.getElementById("datefounded").value = datefounded;

            var address = localStorage.getItem("address");
            document.getElementById("address").value = address;

            var details = localStorage.getItem("details");
            document.getElementById("details").value = details;

            var phone = localStorage.getItem("phone");
            document.getElementById("phone").value = phone;

            var sector = localStorage.getItem("sector");
            document.getElementById("sector").value = sector;

            var fullemployees = localStorage.getItem("fullemployees");
            document.getElementById("fullemployees").value = fullemployees;

            var partemployees = localStorage.getItem("partemployees");
            document.getElementById("partemployees").value = partemployees;

            var workforce = localStorage.getItem("workforce");
            document.getElementById("workforce").value = workforce;


            var govItem = localStorage.getItem("govItem");
            document.getElementById("govItem").value = govItem;

            var encItem = localStorage.getItem("encItem");
            document.getElementById("encItem").value = encItem;

            var nghgItem = localStorage.getItem("nghgItem");
            document.getElementById("nghgItem").value = nghgItem;

            var epItem = localStorage.getItem("epItem");
            document.getElementById("epItem").value = epItem;

            var disItem = localStorage.getItem("disItem");
            document.getElementById("disItem").value = disItem;

            var termItem = localStorage.getItem("termItem");
            document.getElementById("termItem").value = termItem;

            var wasItem = localStorage.getItem("wasItem");
            document.getElementById("wasItem").value = wasItem;

            var watItem = localStorage.getItem("watItem");
            document.getElementById("watItem").value = watItem;

            var piItem = localStorage.getItem("piItem");
            document.getElementById("piItem").value = piItem;

            var eneItem = localStorage.getItem("eneItem");
            document.getElementById("eneItem").value = eneItem;

            var proItem = localStorage.getItem("proItem");
            document.getElementById("proItem").value = proItem;

            var hItem = localStorage.getItem("hItem");
            document.getElementById("hItem").value = hItem;

            var wagItem = localStorage.getItem("wagItem");
            document.getElementById("wagItem").value = wagItem;

            var ghgItem = localStorage.getItem("ghgItem");
            document.getElementById("ghgItem").value = ghgItem;




        }
    </script>


</body>

</html>
