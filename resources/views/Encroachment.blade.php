<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Encroachment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/frontend/energy.css">
</head>

<body>
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
    <table class="table">
        <tbody>
            <tr>
                <td class="strong" colspan="6"><strong>Encroachment</strong></td>
                <td class="green2">Overall score<button type="button" class="btn btn-outline-info btn-sm"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        title="This is the percentage progress on the journey toward not causing any harm on this issue. ">?</button>
                </td>
                <td class="lightpurple" id="enck2a"></td>
            </tr>

            <tr>
                <td class="a" colspan="8">Facilities and fixed assets that are owned or controlled by
                    sustainable organizations do not encroach on marine or terrestrial ecosystems, or on culturally
                    sensitive areas.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="A sustainable company protects natural ecosystems and communities where it is already present, and takes steps to avoid or mitigate negative outcomes when moving into new areas.

Companies work in collaboration with local communities adjacent to pristine ecosystems in order to foster their protection and, if necessary, their restoration. ">?</button>
                </td>
            </tr>
            <tr>
                <td class="lightyellow" colspan="8"><strong>Performance on encroachment</strong><button type="button"
                        class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Sustainable organizations eliminate their negative impacts on natural ecosystems and communities. This includes but is not limited to:
• Respecting the land rights of communities
  (e.g. zero tolerance on land grabbing).
• Protecting aquatic ecosystems from degradation
  (e.g. avoiding coral reefs).
• Protecting areas of high biodiversity value
  (e.g. no clearing of rainforest for farmland).
• Not encroaching on areas of cultural importance
  (e.g. oil pipelines running through regions
   considered sacred by Indigenous Peoples).

The organization must: (a) protect such areas where it is already present, and (b) take steps to avoid or mitigate negative outcomes when moving into new areas.">?</button><br>
                    Does your organization do any of the following to avoid marine or terrestrial encroachment, or
                    encroachment on culturally sensitive / heritage areas?<br>
                    (Check all that apply; replace sample data with real organization data)</td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio1" value="yes"></td>
                <td class="a" colspan="7">None of our facilities are in areas where encroachment is an
                    issue.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="If this choice is checked, the score will be 100%, since the company is doing no harm in this issue.">?</button><br>
                    (If selected, you score 100%. Skip to the next question)</td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio2" value="yes"></td>
                <td class="a" colspan="7">Some of our facilities are in potential encroachment areas, but
                    we do not currently monitor and record encroachment.<button type="button"
                        class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="If this choice is checked, the score will be zero, even if other choices are checked. If this is selected, ignore the rest of the choices in the list and move on to the next question.">?</button>
                    <br>
                    (If selected, delete the sample percentage and skip to the next question.)</td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio3" value="yes"></td>
                <td class="a" colspan="7">We monitor and record our encroachment.<button type="button"
                        class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Estimate the percentage on this scale, rounding up:
0%, 10%, 20% … 80%, 90%, 100%.

Document data sources, estimation methodology and assumptions.">?</button></td>
            </tr>

            <tr>
                <td rowspan="2"></td>
                <td class="a" colspan="5">Approximate percentage of facility sites that are in potential
                    encroachment areas,
                    but do not encroach on ecosystems or communities</td>
                <td class="yellow2" colspan="2"><input type="number" id="enck9a" name="num"></td>
            </tr>

            <tr>
                <td class="yellow2" colspan="7"><input type="text" name="text" class="text"
                        placeholder="Notes!!"></td>

            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio4" value="yes"></td>
                <td class="a" colspan="7">We have set encroachment reduction targets, relative to a chosen
                    reference/baseline year.<button type="button" class="btn btn-outline-info btn-sm"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        title=" The targets may be relative to a baseline year of the company's choosing.">?</button>
                </td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio5" value="yes"></td>
                <td class="a" colspan="7">We met encroachment reduction targets, for the reporting
                    period.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="These results can be compared with scores in previous reporting periods, to show a trend line. ">?</button>
                </td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio6" value="yes"></td>
                <td class="a" colspan="7">We have a science-based goal of zero encroachment, regardless of
                    organization growth.<button type="button" class="btn btn-outline-info btn-sm"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        title="If the science-based goal is associated with a date, it is more credible and forceful.">?</button>
                </td>
            </tr>

            <tr>
                <td class="lightpurple" id="encc14a"></td>
                <td colspan="7"><button id="but" class="btn btn-outline-success"
                        onclick="encroachment()">Calculate!</button></td>
            </tr>

        </tbody>
    </table>

    <nav class="page">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="/waste">Previous</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">Current Page</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="/wages" onclick="encroachment()">Next</a>
            </li>
        </ul>
    </nav>

    <script>
        function encroachment() {
            var count = 0;

            var ENCK9 = document.getElementById("enck9a").value;

            var ENCC6 = document.getElementById("inlineradio1").checked;
            var ENCC7 = document.getElementById("inlineradio2").checked;
            var ENCC8 = document.getElementById("inlineradio3").checked;
            var ENCC11 = document.getElementById("inlineradio4").checked;
            var ENCC12 = document.getElementById("inlineradio5").checked;
            var ENCC13 = document.getElementById("inlineradio6").checked;

            if (ENCC6 === true) {
                ENCC14 = 100;
            } else if (ENCC7 === true) {
                ENCC14 = 0;
            } else {
                if (ENCC8 === true) {
                    count = count + 1;
                }

                if (ENCC11 === true) {
                    count = count + 1;
                }

                if (ENCC12 === true) {
                    count = count + 1;
                }

                if (ENCC13 === true) {
                    count = count + 1;
                }

                ENCC14 = Math.round((count / 4) * 100);
            }

            document.getElementById("encc14a").innerHTML = ENCC14 + " %";

            if (ENCC6 === true) {
                ENCK2 = 100;
            } else if (ENCC7 === true) {
                ENCK2 = 0;
            } else {
                ENCK2 = Math.round((Number(ENCC14) + Number(ENCK9)) / 2);
            }

            document.getElementById("enck2a").innerHTML = ENCK2 + " %";
            localStorage.setItem("encItem", ENCK2);
        }
    </script>

</body>

</html>
