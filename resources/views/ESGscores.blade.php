<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ESG Scores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/frontend/ESGscores.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
</head>

<body onload="esg()">
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
    <h1 class="purple1">Summary of ESG Scores</h1>
    <p class="para1">This is a summary of the scores on ESG / sustainability issues, as calculated in their
        respective worksheets.</p>
    <div class="performanceScores">
        <h2>ESG Performance Scores</h2>
        <canvas id="myChart" width="350" height="100"></canvas>

    </div>
    <div class="overallScores">
        <h2>Overall Scores</h2>
        <canvas id="myOverallChart" width="10" height="2"></canvas>
    </div>

    <div class="clearfix">

        <div class="box">
            <table id="allScores">
                <tr>

                    <th>Core ESG Issues</th>
                    <th>% Progress Scores</th>
                </tr>
                <tr>

                    <td id="colorpur">Governance</td>
                    <td id="esge11a"></td>
                </tr>
                <tr>

                    <td id="colorgre">Energy</td>
                    <td id="esge12a">
                        </pur </tr>
                <tr>

                    <td id="colorgre">Water</td>
                    <td id="esge13a"></td>
                </tr>
                <tr>
                    <td id="colorgre">Procurement</td>
                    <td id="esge14a"></td>
                </tr>
                <tr>

                    <td id="colorgre">GHG emission</td>
                    <td id="esge15a"></td>
                </tr>
                <tr>

                    <td id="colorgre">Non-GHG emission</td>
                    <td id="esge16a"></td>
                </tr>
                <tr>

                    <td id="colorgre">Waste</td>
                    <td id="esge17a"></td>
                </tr>
                <tr>

                    <td id="colorgre">Encroachment</td>
                    <td id="esge18a"></td>
                </tr>

                <tr>
                    <td id="colorblue">Employee Wages</td>
                    <td id="esge19a"></td>
                </tr>

                <tr>
                    <td id="colorblue">Employee Health</td>
                    <td id="esge20a"></td>
                </tr>

                <tr>
                    <td id="colorblue">Employee Terms</td>
                    <td id="esge21a"></td>
                </tr>

                <tr>
                    <td id="colorblue">Discrimination</td>
                    <td id="esge22a"></td>
                </tr>

                <tr>
                    <td id="colordblue">Ethical Practices</td>
                    <td id="esge23a"></td>
                </tr>

                <tr>
                    <td>Average Performance</td>
                    <td id="esge24a"></td>
                </tr>

                <tr>
                    <td id="colorpur">+ Postive Impacts bonus</td>
                    <td id="esge25a"></td>
                </tr>

                <tr>
                    <td>Overall Score</td>
                    <td id="esge26a"></td>
                </tr>
            </table>
        </div>
        <div class="box1">
            <h2>Meaning of % Progress Scores</h2><br>
            <p>
                <100%: How far the organization is on its journey toward not causing any harm on that issue.<br>
                    100%: The organization is breaking even on that issue – it's not causing any harm.<br>
                    >100%: The organization is being restorative / regenerative / net positive, directly or indirectly,
                    overall.
            </p><br><br><br><br><br><br>

            <h2>Graphical Representations</h2>
            <p>"The bar charts above illustrate the kind of graphical representations that make presentations / reports
                more effective and facilitate prioritizing sustainability issues for improvement. The bar charts are
                generated in real time, based on the scores in the adjacent table. <br>

                Users are encouraged to transcribe the scores into their own separate Excel worksheet, or into a
                different preferred graphics software package, to generate other kinds of charts (e.g. column, radar, or
                pie charts), dashboards, and / or line charts that show trends in their organization's performance on
                high-focus issues compared to previous years, if that information is available."
            </p>
        </div>
    </div>
    </div>
    <br>

    <nav class="page">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="/positive-impacts">Previous</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">Current Page</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="/SDG-scores">Next</a>
            </li>
        </ul>
    </nav>
    <script src="/frontend/esgscores.js" charset="utf-8"></script>
    <script src="/frontend/discrimination.js" charset="utf-8"></script>
    <script src="/frontend/charts.js" charset="utf-8"></script>

</body>

</html>
