<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Energy</title>
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
            <a class="navbar-brand" href="/"><img
                    src="https://futurefitbusiness.org/wp-content/uploads/2019/04/sustainability-advantage.png"
                    width="140" height="50"></a>
            </button>
        </div>
        </div>
    </nav><br>
    <table class="table">
        <tbody>
            <tr>
                <td class="strong" colspan="5"><strong>Energy</strong></td>

                <td class="green2">Overall Score<button type="button" class="btn btn-outline-info btn-sm"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        title="This is the percentage progress on the journey toward not causing any harm on this issue.">?</button>
                </td>
                <td class="lightpurple" id="ek2a"></td>
            </tr>

            <tr>
                <td class="a" colspan="7">Sustainable organizations use only renewable energy.<button
                        type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="left" title="To address climate change, we must transition to a low-carbon economy powered by renewable energy.

Energy includes both electricity and fuels consumed by:
      1) buildings and equipment at all locations, whether owned or leased (e.g. lighting, heating and computers)
      2) transport vehicles that the company owns or leases
      3) any other energy that the company consumes to conduct its business. ">?</button></td>
            </tr>

            <tr>
                <td class="lightyellow" colspan="7"><strong>Performance on energy usage</strong><button type="button"
                        class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="This question will give some credit to the company for managing the issue, even if the resulting score is low.">?</button><br>
                    Does your organization do any of the following to manage its energy usage?
                    (Check all that apply; replace sample data with real organization data)</td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" id="inlineradio1" name="yes" value="yes"></td>
                <td class="a" colspan="6">"We do not currently monitor and record energy usage.<button
                        type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title="If this choice is checked, the score will be zero, even if other choices are checked. If this is selected, ignore the rest of the choices in the list and move on to the next question.">?</button><br>
                    (If selected, delete the sample percentage and skip to the next question.)</td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" id="inlineradio2" name="yes" value="yes"></td>
                <td class="a" colspan="6">We monitor and record our energy (electricity and fuel) usage,
                    including renewable energy usage.<button type="button" class="btn btn-outline-info btn-sm"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="An organization's reference / baseline year is the year when its recorded non-renewable energy use was the highest on record. This percentage is the reduction from that baseline amount, on the journey toward zero non-renewable energy use.

Renewable energy sources are solar, wind, ocean, hydropower, geothermal resources, or biomass.

Estimate the percentages on this scale, rounding up: 0%, 10%, 20% … 80%, 90%, 100%.

Document data sources, estimation methodology and assumptions in the Notes area.">?</button></td>
            </tr>

            <tr>
                <td rowspan="3"></td>
                <td class="a" colspan="4">Approximate percentage reduction of our non-renewable energy use,
                    relative to our chosen reference / baseline year</td>
                <td colspan="2" class="yellow2"><input type="number" id="ek8a" min="0" max="1" maxlength="10"
                        placeholder="%"></td>
            </tr>

            <tr>

                <td class="a" colspan="4">Approximate percentage of total energy used that now comes from
                    renewable sources</td>
                <td colspan="2" class="yellow2"><input type="number" id="ek9a" min="0" max="1" maxlength="10"
                        placeholder="%"></td>
            </tr>

            <tr>

                <td class="yellow2" colspan="6"><input class="text" type="text" name="text"
                        placeholder="Notes!"></td>
            </tr>

            <tr>

                <td class="yellow2"><input type="checkbox" id="inlineradio3" name="yes" value="yes"></td>
                <td class="a" colspan="6">We have set targets for energy efficiency and/or renewable energy
                    usage.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="left"
                        title=" The targets may be relative to a baseline year of the company's choosing.">?</button>
                </td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" id="inlineradio4" name="yes" value="yes"></td>
                <td class="a" colspan="6">We met targets for energy efficiency and/or renewable energy
                    usage, for the reporting period.<button type="button" class="btn btn-outline-info btn-sm"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        title="These results can be compared with scores in previous reporting periods, to show a trend line. .">?</button>
                </td>
            </tr>

            <tr>
                <td class="yellow2"><input type="checkbox" id="inlineradio5" name="yes" value="yes"></td>
                <td class="a" colspan="6">We have a science-based goal of using 100% low-impact renewable
                    energy, regardless of organization growth.<button type="button" class="btn btn-outline-info btn-sm"
                        data-bs-toggle="tooltip" data-bs-placement="left"
                        title="If the science-based goal is associated with a date, it is more credible and forceful.">?</button>
                </td>
            </tr>

            <tr>
                <td class="lightpurple" id="ec14a"></td>
                <td colspan="6"><button id="but" class="btn btn-outline-success" onclick="energy()">Calculate!</button>
                </td>
            </tr>

        </tbody>
    </table>
    <nav class="page">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="/governance">Previous</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">Current Page</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="/water" onclick="energy()">Next</a>
            </li>
        </ul>
    </nav>

    <script src="/frontend/energy.js" charset="utf-8"></script>

</body>

</html>
