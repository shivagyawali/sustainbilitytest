<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Capitals Scores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/frontend/SDG scores.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
</head>

<body onload="capscores()">
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
    <h1 class="purple1">Non-Financial Capitals Scores</h1>
    <p class="para1">ESG Scores are mapped to natural, human and social capitals to generate scores on those
        non-financial capitals.</p>
    <div class="performanceScores">
        <h2>Non-Financial Capitals Scores</h2>
        <canvas id="myChart" width="350" height="100"></canvas>
    </div>
    <div class="summaryScores">
        <h2>Summary Scores</h2>
        <canvas id="myOverallChart" width="10" height="2"></canvas>
    </div>
    <div class="container">
        <h1 class="purple1">Mapping of ESG Scores to Non-Financial Capitals</h1>
        <p class="para1">Scores on ESG issues are proxies for scores on aligned non-financial capitals. This
            table shows how ESG scores are mapped to the three non-financial capitals. Governance scores are always
            factored in, to reinforce that improving governance improves everything.</p>

        <table id="overallScores">
            <tr>

                <th>Core ESG Issues</th>
                <th>ESG Scores</th>
                <th class="green">Natural Capital</th>
                <th class="blue">Human Capital</th>
                <th class="dblue">Social Capital</th>
            </tr>
            <tr>

                <td id="colorpi">Governance</td>
                <td id="esge11a"></td>
                <td id="esge40a"></td>
                <td id="esge41a"></td>
                <td id="esge42a"></td>
            </tr>
            <tr>

                <td id="colorgre">Energy</td>
                <td id="energy1"></td>
                <td id="energy2"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>

                <td id="colorgre">Water</td>
                <td id="water1"></td>
                <td id="water2"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td id="colorgre">Procurement</td>
                <td id="procurement1"></td>
                <td id="procurement2"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>

                <td id="colorgre">GHG Emissions</td>
                <td id="ghg1"></td>
                <td id="ghg2"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>

                <td id="colorgre">Non-GHG Emissions</td>
                <td id="nghg1"></td>
                <td id="nghg2"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>

                <td id="colorgre">Waste</td>
                <td id="waste1"></td>
                <td id="waste2"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>

                <td id="colorgre">Encroachment</td>
                <td id="enc1"></td>
                <td id="enc2"></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td id="colorblue">Employee Wages</td>
                <td id="wages1"></td>
                <td></td>
                <td id="wages2"></td>
                <td></td>
            </tr>

            <tr>
                <td id="colorblue">Employee health</td>
                <td id="health1"></td>
                <td></td>
                <td id="health2"></td>
                <td></td>
            </tr>

            <tr>
                <td id="colorblue">Employee terms</td>
                <td id="terms1"></td>
                <td></td>
                <td id="terms2"></td>
                <td></td>
            </tr>

            <tr>
                <td id="colorblue">Employee discrimination</td>
                <td id="disc1"></td>
                <td></td>
                <td id="disc2"></td>
                <td></td>
            </tr>

            <tr>
                <td id="colorb">Ethical Practices</td>
                <td id="eprac1"></td>
                <td></td>
                <td></td>
                <td id="eprac2"></td>
            </tr>

            <tr>
                <td>Progress Scores</td>
                <td></td>
                <td id="cse28a"></td>
                <td id="csf28a"></td>
                <td id="csg28a"></td>
            </tr>

            <tr>
                <td>Average Performance</td>
                <td></td>
                <td id="cse29a"></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td id="colorpi">+ Positive impacts bonus</td>
                <td></td>
                <td id="esge25a"></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>Overall Score</td>
                <td></td>
                <td id="cse31a"></td>
                <td></td>
                <td></td>
            </tr>
        </table><br>

        <p class="para1"><strong>Meaning of % Progress Scores</strong><br>
            <100%: How far the organization is on its journey toward not devaluing the capital. <br>
                100%: The organization is breaking even on the capital – it's not devaluing it, but is not adding value
                to it, either.<br>
                >100%: The organization is adding value to the capital, directly or indirectly.
        </p>

        <h3>Graphical Representations</h3>
        <p class="para1">
            The bar charts above illustrate the kind of graphical representations that make presentations / reports more
            effective and facilitate prioritizing sustainability issues for improvement. The bar charts are generated in
            real time, based on the scores in the above table. <br>

            Users are encouraged to transcribe the scores into their own separate Excel worksheet, or into a different
            preferred graphics software package, to generate other kinds of charts (e.g. column, radar, or pie charts),
            dashboards, and / or line charts that show trends in their organization's performance on high-focus issues
            compared to previous years, if that information is available.

        </p>
    </div><br>

    <nav class="page">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="/SDG-scores">Previous</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">Current Page</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="/takeAction">Next</a>
            </li>
        </ul>
    </nav>
    <script src="/frontend/capitalscores.js" charset="utf-8"></script>
    <script src="/frontend/discrimination.js" charset="utf-8"></script>
    <script src="/frontend/charts2.js" charset="utf-8"></script>
</body>

</html>
