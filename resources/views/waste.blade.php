<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Waste</title>
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
            <a class="navbar-brand" href="" width="140" height="50"></a>
            </button>
        </div>
        </div>
    </nav><br>
    <div class="table1">
        <table class="table">
            <tbody>
                <tr>
                    <td class="strong" colspan="6"><strong>Waste</strong></td>
                    <td class="green2">Overall score<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="This is the percentage progress on the journey toward not causing any harm on this issue. ">?</button>
                    </td>
                    <td class="lightpurple" id="wask2a"></td>
                </tr>

                <tr>
                    <td class="a" colspan="8">Sustainable organizations eliminate all avoidable hazardous
                        and non-hazardous waste and repurpose all remaining forms of waste.<button type="button"
                            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Waste is materials generated as by-products of production and other operational activities which the company manages to contain, and which require treatment, repurposing, or disposal. This includes both hazardous and non-hazardous manufacturing materials, as well as non-production waste (e.g. office paper, food, retired equipment).

The goal is to eliminate all avoidable hazardous and non-hazardous waste generation and then repurpose all remaining forms of waste in ways that minimize quality loss (and thus prolong the life of the materials concerned).

(Note: Liquid, gaseous, or solid wastes which are accidentally or intentionally discharged directly into the environment are covered by Non-GHG Emissions.)">?</button></td>
                </tr>
                <tr>
                    <td class="lightyellow" colspan="8"><strong>Performance on overall operations
                            waste</strong><button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Waste is used here to mean all materials generated as by-products of production and other operational activities which the company manages to contain, and which require treatment, repurposing, or disposal. This includes both hazardous and non-hazardous manufacturing materials, as well as non-production waste (e.g. office paper, food, retired equipment).

To be sustainable an organization must eliminate all avoidable waste generation and reuse, recycle or otherwise repurpose any remaining waste.">?</button><br>Does your
                        organization do any of the following to manage its hazardous and non-hazardous waste?<br>
                        (Check all that apply; replace sample data with real organization data)</td>
                </tr>
                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio1" value="yes"></td>
                    <td class="a" colspan="7">We do not currently monitor and record our hazardous and
                        non-hazardous waste.<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="If this choice is checked, the score will be zero, even if other choices are checked. If this is selected, ignore the rest of the choices in the list and move on to the next question.">?</button><br>
                        (If selected, delete the sample percentages and skip to the next question.)
                    </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio2" value="yes"></td>
                    <td class="a" colspan="7">We monitor and record our hazardous and non-hazardous
                        waste.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Waste is used here to mean all materials generated as by-products of production and other operational activities which the company manages to contain, and which require treatment, repurposing, or disposal. Waste is hazardous and non-hazardous by-products of production and operations, as well as non-production waste (e.g. office paper, food, retired equipment).

To be sustainable an organization must eliminate all avoidable waste generation and reuse, recycle or otherwise repurpose any remaining waste.

Estimate the percentage on this scale, rounding up:
0%, 10%, 20% … 80%, 90%, 100%.

Document data sources, estimation methodology and assumptions in the Notes area.">?</button></td>
                </tr>

                <tr>
                    <td rowspan="3"></td>
                    <td colspan="5">Approximate percentage of hon-hazardous waste that is repurposed / recycled</td>
                    <td class="yellow2" colspan="2"><input type="number" id="wask8a" name="num"></td>
                </tr>

                <tr>
                    <td colspan="5">Approximate percentage of hazardous waste that is properly disposed of</td>
                    <td class="yellow2" colspan="2"><input type="number" id="wask9a" name="num"></td>

                </tr>

                <tr>
                    <td class="yellow2" colspan="7"><input type="text" name="text" class="text"
                            placeholder="Notes!!"></td>

                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio3" value="yes"></td>
                    <td class="a" colspan="7">We have set targets for our hazardous and non-hazardous
                        waste.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                            data-bs-placement="left"
                            title=" The targets may be relative to a baseline year of the company's choosing.">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio4" value="yes"></td>
                    <td class="a" colspan="7">We met targets for our hazardous and non-hazardous waste, for
                        the reporting period.<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="These results can be compared with scores in previous reporting periods, to show a trend line. ">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio5" value="yes"></td>
                    <td class="a" colspan="7">We have a science-based goal of zero hazardous and
                        non-hazardous waste, regardless of organization growth.<button type="button"
                            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="If the science-based goal is associated with a date, it is more credible and forceful.">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="lightpurple" id="wasc14a"></td>
                    <td class="a" colspan="7"><button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="The calculate button is at the end of the table.">?</button></td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="table2">
        <table class="table">
            <tbody>
                <tr>
                    <td class="lightyellow" colspan="8"><strong>Performance on product and packaging
                            waste</strong><button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="This question will give some credit to the company for managing the issue, even if the resulting score is low. ">?</button><br>
                        Does your organization do any of the following to manage its product and packaging waste?<br>
                        (Check all that apply; replace sample data with real organization data)</td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio6" value="yes"></td>
                    <td class="a" colspan="7">We do not currently monitor and record our product and
                        packaging waste.<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="If this choice is checked, the score will be zero, even if other choices are checked. If this is selected, ignore the rest of the choices in the list and move on to the next question. ">?</button><br>
                        (If selected, skip to the next question)</td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio7" value="yes"></td>
                    <td class="a" colspan="7">We monitor and record our product and packaging waste.<button
                            type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Product waste occurs at the end-of-use phase of the project. The intent is to avoid the product being thrown into the environment (e.g. dumped into a landfill). Instead, in a circular economy the product is repaired, refurbished, reused or recycled.

Packaging waste includes waste associated with bulk shipments and waste associated with individual products (e.g., plastic bottles) and their delivery.

Estimate the percentage on this scale, rounding up:
0%, 10%, 20% … 80%, 90%, 100%.

Document data sources, estimation methodology and assumptions in the Notes area.">?</button></td>
                </tr>

                <tr>
                    <td rowspan="3"></td>
                    <td colspan="5">Approximate percentage of product waste that is repurposed / recycled at end-of-use
                    </td>
                    <td class="yellow2" colspan="2"><input type="number" id="wask19a" name="num"></td>
                </tr>

                <tr>
                    <td colspan="5">Approximate percentage of packaging waste that is repurposed / recycled </td>
                    <td class="yellow2" colspan="2"><input type="number" id="wask20a" name="num"></td>

                </tr>

                <tr>
                    <td class="yellow2" colspan="7"><input type="text" name="text" class="text"
                            placeholder="(Comments)"></td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio8" value="yes"></td>
                    <td class="a" colspan="7"> Our products can be broken down easily into components and
                        recycled through local waste infrastructure.<button type="button"
                            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Principles of eco-design and the circular economy are incorporated in product design. Products can be repurposed at end of life.

Check all that apply, even if customers do  not take advantage of the recycling opportunities. ">?</button></td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio9" value="yes"></td>
                    <td class="a" colspan="7">Our products are at least partially recyclable, through local
                        waste infrastructure and take-back schemes.<button type="button"
                            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Principles of eco-design and the circular economy are incorporated in product design. Products can be repurposed at end of life.

Check all that apply, even if customers do  not take advantage of the recycling opportunities. ">?</button> </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio10" value="yes"></td>
                    <td class="a" colspan="7">Our products are either completely biodegradable or
                        recyclable through local waste infrastructure and take-back schemes.
                        <button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="Principles of eco-design and the circular economy are incorporated in product design. Products can be repurposed at end of life.

Check all that apply, even if customers do  not take advantage of the recycling opportunities. ">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio11" value="yes"></td>
                    <td class="a" colspan="7">We have set targets for our product and packaging
                        waste.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                            data-bs-placement="left"
                            title=" The targets may be relative to a baseline year of the company's choosing.">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio12" value="yes"></td>
                    <td class="a" colspan="7">We met targets for product and packaging waste, for the
                        reporting period.<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="These results can be compared with scores in previous reporting periods, to show a trend line. ">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio13" value="yes"></td>
                    <td class="a" colspan="7">We have a science-based goal of zero product and packaging
                        waste, regardless of organization growth.<button type="button"
                            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="If the science-based goal is associated with a date, it is more credible and forceful.">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="lightpurple" id="wasc28a"></td>
                    <td colspan="7"><button id="but" class="btn btn-outline-success"
                            onclick="waste()">Calculate!</button></td>
                </tr>

            </tbody>
        </table>

        <nav class="page">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="/non-ghg-emission">Previous</a></li>
                <li class="page-item active" aria-current="page">
                    <span class="page-link">Current Page</span>
                </li>
                <li class="page-item">
                    <a class="page-link" href="/Encroachment" onclick="waste()">Next</a>
                </li>
            </ul>
        </nav>

        <script src="/frontend/waste.js" charset="utf-8"></script>

</body>

</html>
