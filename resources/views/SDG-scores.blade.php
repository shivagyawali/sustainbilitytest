<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SDG Scores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/frontend/SDG scores.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
</head>

<body onload="sdg()">
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
    <h1 class="purple1">SDG Scores</h1>
    <p class="para1">ESG Scores are mapped to their most closely-related, primary SDGs to generate scores on the
        SDGs.</p>
    <div class="performanceScores">
        <h2>SDG Performance Scores</h2>
        <canvas id="myChart" width="350" height="100"></canvas>
    </div>
    <div class="summaryScores">
        <h2>Summary Scores</h2>
        <canvas id="myOverallChart" width="10" height="2"></canvas>
    </div>

    <div class="clearfix">
        <div class="box">
            <table id="overallScores">
                <tr>

                    <th>SDGs</th>
                    <th>% Progress Scores</th>
                </tr>
                <tr>

                    <td id="colornp">No Poverty</td>
                    <td id="sdgg67a"></td>
                </tr>
                <tr>

                    <td id="colorzh">Zero hunger</td>
                    <td id="sdgh67a"></td>
                </tr>
                <tr>

                    <td id="colorghw">Good health and wellbeing</td>
                    <td id="sdgi67a"></td>
                </tr>
                <tr>
                    <td id="colorqe">Quality education</td>
                    <td id="sdgk67a"></td>
                </tr>
                <tr>

                    <td id="colorge">Gender equality</td>
                    <td id="sdgj67a"></td>
                </tr>
                <tr>

                    <td id="colorcws">Clean water and sanitation</td>
                    <td id="sdgi58a"></td>
                </tr>
                <tr>

                    <td id="colorace">Affordable and clean energy</td>
                    <td id="sdgg58a"></td>
                </tr>
                <tr>

                    <td id="colordweg">Decent work and economic growth </td>
                    <td id="sdgl67a"></td>
                </tr>

                <tr>
                    <td id="coloriii">Industry innovation and infrastructure</td>
                    <td id="sdgg73a"></td>
                </tr>

                <tr>
                    <td id="colorri">Reduced inequalities</td>
                    <td id="sdgh73a"></td>
                </tr>

                <tr>
                    <td id="colorscc">Sustainable cities and communities</td>
                    <td id="sdgi73a"></td>
                </tr>

                <tr>
                    <td id="colorrcp">Responsible consumption and production</td>
                    <td id="sdgj58a"></td>
                </tr>

                <tr>
                    <td id="colorca">Climate action</td>
                    <td id="sdgh58a"></td>
                </tr>

                <tr>
                    <td id="colorlbw">Life below water</td>
                    <td id="sdgk58a"></td>
                </tr>

                <tr>
                    <td id="colorlol">Life on land</td>
                    <td id="sdgl58a"></td>
                </tr>

                <tr>
                    <td id="colorpjsi">Peace, justice and strong institutions</td>
                    <td id="sdgj73a"></td>
                </tr>

                <tr>
                    <td id="colorpg">Patnerships for the goals</td>
                    <td id="sdgk73a"></td>
                </tr>

                <tr>
                    <td>Average Performance</td>
                    <td id="sdgg39a"></td>
                </tr>

                <tr>
                    <td id="colorpi">+ Positive impacts bonus</td>
                    <td id="esge25a"></td>
                </tr>

                <tr>
                    <td>Overall Score</td>
                    <td id="sdgg41a"></td>
                </tr>
            </table>
        </div>
        <div class="box1">
            <h2>Meaning of % Progress Scores</h2><br>
            <p>
                <100%: How far the organization is on its journey toward not working against that SDG .<br>
                    100%: The organization is breaking even on that SDG - It's not working against it.<br>
                    >100%: The organization is being restorative / regenerative / net positive on the SDG, directly or
                    indirectly,
                    overall.
            </p><br><br><br><br><br><br>

            <h2>Graphical Representations</h2><br><br>
            <p>"The bar charts above illustrate the kind of graphical representations that make presentations / reports
                more
                effective and facilitate prioritizing sustainability issues for improvement. The bar charts are
                generated in
                real time, based on the scores in the adjacent table. <br><br>

                Users are encouraged to transcribe the scores into their own separate Excel worksheet, or into a
                different
                preferred graphics software package, to generate other kinds of charts (e.g. column, radar, or pie
                charts),
                dashboards, and / or line charts that show trends in their organization's performance on high-focus
                issues
                compared to previous years, if that information is available."
            </p><br>
        </div>
    </div>
    </div><br>
    <div class="table2">
        <h2 id="colorpi">Mapping of ESG Scores to SDGs</h2>
        <p>Scores on ESG issues are proxies for scores on aligned SDGs. These tables show how ESG scores are mapped to
            their
            primary SDGs. Governance scores are always factored in, to reinforce that improving governance improves
            everything.</p><br>
        <table id="mappingESG">
            <tr>
                <th id="colorgre" colspan="8">Environment-related SDGs</th>
            </tr>
            <tr>
                <th>Core ESG Issues</th>
                <th>Esg Scores</th>
                <th id="colorace">7 Affordable and clean energy</th>
                <th id="colorca">13 Climate action</th>
                <th id="colorcws">6 Clean water and sanitation</th>
                <th id="colorrcp">12 Responsible consumption and production</th>
                <th id="colorlbw">14 Life below water</th>
                <th id="colorlol">15 Life on land</th>
            </tr>
            <tr>

                <td id="colorpi">Governance</td>
                <td id="esge11a"></td>
                <td id="esge40a"></td>
                <td id="esge41a"></td>
                <td id="esge42a"></td>
                <td id="esge43a"></td>
                <td id="esge44a"></td>
                <td id="esge45a"></td>
            </tr>
            <tr>

                <td id="colorgre">Energy</td>
                <td id="energy1"></td>
                <td id="energy2"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <tr>

                <td id="colorgre">GHG Emissions</td>
                <td id="ghg1"></td>
                <td></td>
                <td id="ghg2"></td>
                <td></td>
                <td></td>
                <td id="ghg3"></td>
                <td id="ghg4"></td>
            </tr>
            <tr>
                <td id="colorgre">Water</td>
                <td id="water1"></td>
                <td></td>
                <td></td>
                <td id="water2"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>

                <td id="colorgre">Procurement</td>
                <td id="procurement1"></td>
                <td></td>
                <td></td>
                <td></td>
                <td id="procurement2"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>

                <td id="colorgre">Non-GHG emissions</td>
                <td id="nghg1"></td>
                <td></td>
                <td></td>
                <td></td>
                <td id="nghg2"></td>
                <td id="nghg3"></td>
                <td id="nghg4"></td>
            </tr>
            <tr>

                <td id="colorgre">Waste</td>
                <td id="waste1"></td>
                <td></td>
                <td></td>
                <td></td>
                <td id="waste2"></td>
                <td id="waste3"></td>
                <td id="waste4"></td>
            </tr>
            <tr>

                <td id="colorgre">Encroachment</td>
                <td id="enc1"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td id="enc2"></td>
                <td id="enc3"></td>
            </tr>

            <tr>
                <td colspan="2">Progress scores</td>
                <td id="sdgg58b"></td>
                <td id="sdgh58b"></td>
                <td id="sdgi58b"></td>
                <td id="sdgj58b"></td>
                <td id="sdgk58b"></td>
                <td id="sdgl58b"></td>
            </tr>
        </table>
    </div>

    <div class="table3">
        <table id="empSDG">
            <tr>
                <th id="colorblue" colspan="8">Employee-related SDGs</th>
            </tr>
            <tr>
                <th>Core ESG Issues</th>
                <th>Esg Scores</th>
                <th id="colornp">1 No poverty</th>
                <th id="colorzh">2 Zero hunger</th>
                <th id="colorghw">3 Good health and wellbeing</th>
                <th id="colorge">5 Gender equality</th>
                <th id="colorqe">4 Quality education</th>
                <th id="colordweg">8 Decent work and economic growth</th>
            </tr>
            <tr>

                <td id="colorpi">Governance</td>
                <td id="esge46a"></td>
                <td id="esge47a"></td>
                <td id="esge48a"></td>
                <td id="esge49a"></td>
                <td id="esge50a"></td>
                <td id="esge51a"></td>
                <td id="esge52a"></td>
            </tr>
            <tr>

                <td id="colorblue">Employee wages</td>
                <td id="wages1"></td>
                <td id="wages2"></td>
                <td id="wages3"></td>
                <td id="wages4"></td>
                <td></td>
                <td id="wages5"></td>
                <td id="wages6"></td>

            </tr>
            <tr>

                <td id="colorblue">Employee terms</td>
                <td id="terms1"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td id="terms2"></td>
                <td id="terms3"></td>
            </tr>
            <tr>
                <td id="colorblue">Employee discrimination</td>
                <td id="disc1"></td>
                <td></td>
                <td></td>
                <td></td>
                <td id="disc2"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>

                <td id="colorblue">Employee health</td>
                <td id="health1"></td>
                <td></td>
                <td></td>
                <td id="health2"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
            <tr>
                <td colspan="2">Progress scores</td>
                <td id="sdgg67b"></td>
                <td id="sdgh67b"></td>
                <td id="sdgi67b"></td>
                <td id="sdgj67b"></td>
                <td id="sdgk67b"></td>
                <td id="sdgl67b"></td>
            </tr>
        </table>
    </div>

    <div class="table4">
        <table id="socSDG">
            <tr>
                <th id="colorb" colspan="8">Society-related SDGs</th>
            </tr>
            <tr>
                <th>Core ESG Issues</th>
                <th>Esg Scores</th>
                <th id="coloriii">9 Industry innovation and infrastructure</th>
                <th id="colorri">10 Reduced inequalities</th>
                <th id="colorscc">11 Sustainable cities and communities</th>
                <th id="colorpjsi">16 Peace, justice and strong institutions</th>
                <th id="colorpg">17 Patnerships for the goals</th>
            </tr>
            <tr>

                <td id="colorpi">Governance</td>
                <td id="esge53a"></td>
                <td id="esge54a"></td>
                <td id="esge55a"></td>
                <td id="esge56a"></td>
                <td id="esge57a"></td>
                <td id="esge58a"></td>
            </tr>
            <tr>

                <td id="colorb">Ethical practices</td>
                <td id="eprac1"></td>
                <td id="eprac2"></td>
                <td id="eprac3"></td>
                <td id="eprac4"></td>
                <td id="eprac5"></td>
                <td id="eprac6"></td>

            </tr>
            <tr>

                <td colspan="2">Progress scores</td>
                <td id="sdgg73b"></td>
                <td id="sdgh73b"></td>
                <td id="sdgi73b"></td>
                <td id="sdgj73b"></td>
                <td id="sdgk73b"></td>
            </tr>

        </table>
    </div>




    <nav class="page">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="/ESGscores">Previous</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">Current Page</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="/capitalscores">Next</a>
            </li>
        </ul>
    </nav>
    <script src="/frontend/sdgscores.js" charset="utf-8"></script>
    <script src="/frontend/discrimination.js" charset="utf-8"></script>
    <script src="/frontend/charts1.js" charset="utf-8"></script>
</body>

</html>
