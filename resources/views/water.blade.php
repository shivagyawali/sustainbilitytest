<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Water</title>
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
            <a class="navbar-brand" href=""><img
                    src="https://futurefitbusiness.org/wp-content/uploads/2019/04/sustainability-advantage.png"
                    width="140" height="50"></a>
            </button>
        </div>
        </div>
    </nav><br>
    <table class="table">
        <tbody>
            <tr>
                <td class="strong" colspan="6"><strong>Water</strong></td>
                <td class="green2">Overall score <button type="button" class="btn btn-outline-info btn-sm"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        title="This is the percentage progress on the journey toward not causing any harm on this issue.">?</button>
                </td>
                <td class="lightpurple" id="wk2a"></td>
            </tr>

            <tr>
                <td class="a" colspan="8">Sustainable organizations do not use water from water stressed
                    areas and ensure that all discharged water is adequately treated. <button type="button"
                        class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Water usage includes water consumed during manufacturing, transportation, and distribution of products; during the provision and delivery of services; and by workers for drinking and sanitation purposes.

Water stress occurs when the demand for water exceeds the available amount, or when poor quality restricts its use. Companies must ensure that their use of water doesn’t undermine the quantity and quality of water available for people and ecosystems that depend on the watersheds concerned.

Water discharged must be verifiably treated and returned to safe quality before it is emitted back into nature. Discharged water may be treated by third parties such as municipal wastewater treatment plants, public sewage infrastructure or private water service providers. ">?</button>
                </td>
            </tr>

            <tr>
                <td class="lightyellow" colspan="8"><strong>Performance on water usage and treatment <button
                            type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                            data-bs-placement="left"
                            title="This question will give some credit to the company for managing the issue, even if the resulting score is low.">?</button><br></strong>
                    Does your organization do any of the following to manage its water usage, treatment and
                    discharge?<br>
                    (Check all that apply; replace sample data with real organization data)</td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" id="inlineradio1" name="yes" value="yes"></td>
                <td class="a" colspan="7">"We do not currently monitor and record water usage, treatment
                    and discharge. <button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="If this choice is checked, the score will be zero, even if other choices are checked. If this is selected, ignore the rest of the choices in the list and move on to the next question.">?</button><br>
                    (If selected, delete the sample percentage and skip to the next question.)</td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" id="inlineradio2" name="yes" value="yes"></td>
                <td class="a" colspan="7">We monitor and record our water usage <button type="button"
                        class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Organizations should eliminate water consumption due to commercial and industrial activities in water-stressed regions.

Estimate the percentage on this scale, rounding up:
0%, 10%, 20% … 80%, 90%, 100%.

Document data sources, estimation methodology and assumptions in the Notes area.">?</button></td>
            </tr>

            <tr>
                <td rowspan="3"></td>
                <td class="a" colspan="5">Approximate percentage of total water used that comes from
                    unstressed water regions</td>
                <td class="yellow2" colspan="2"><input type="number" id="wk8a" name="number" placeholder="%">
                </td>
            </tr>

            <tr>

                <td class="a" colspan="5">Approximate percentage of total water discharged that is safely
                    and appropriately treated, either by the organization before discharge or by a third party after it
                    is discharged.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="left" title="An organization should ensure that its water discharge does not degrade the water quality of receiving watersheds. Water treatment may be managed by third parties such as municipal wastewater treatment plants, public sewage infrastructure or private water service
providers.

Estimate the percentage on this scale, rounding up:
0%, 10%, 20% … 80%, 90%, 100%.

Document data sources, estimation methodology and assumptions in the Notes area.">?</button></td>
                <td class="yellow2" colspan="2"><input type="number" id="wk9a" name="number" placeholder="%">
                </td>
            </tr>

            <tr>

                <td class="yellow2" colspan="7"><input class="text" type="text" name="text"
                        placeholder="Notes!"><button type="button" class="btn btn-outline-info btn-sm"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Document data sources, estimation methodology and assumptions.">?</button></td>
                </td>
            </tr>

            <tr>

                <td class="yellow2"><input type="checkbox" id="inlineradio3" name="yes" value="yes"></td>
                <td class="a" colspan="7">We have set targets for water efficiency and/or water treatment.
                    <button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title=" The targets may be relative to a baseline year of the company's choosing.">?</button>
                </td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" id="inlineradio4" name="yes" value="yes"></td>
                <td class="a" colspan="7">We met targets for water efficiency and/or water treatment, for
                    the reporting period.<button type="button" class="btn btn-outline-info btn-sm"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        title="These results can be compared with scores in previous reporting periods, to show a trend line. ">?</button>
                </td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" id="inlineradio5" name="yes" value="yes"></td>
                <td class="a" colspan="7">We have a science-based goal of using zero net water from
                    water-stressed areas, regardless of organization growth.<button type="button"
                        class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="If the science-based goal is associated with a date, it is more credible and forceful.">?</button>
                </td>

            </tr>

            <tr>
                <td class="lightpurple" id="wc14a"></td>
                <td colspan="7"><button id="but" class="btn btn-outline-success" onclick="water()">Calculate!</button>
                </td>
            </tr>

        </tbody>
    </table>
    <nav class="page">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="/energy">Previous</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">Current Page</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="/procurement" onclick="water()">Next</a>
            </li>
        </ul>
    </nav>

    <script src="/frontend/water.js" charset="utf-8"></script>

</body>

</html>
