<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>GHG Emission</title>
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
    <div>
        <table class="table">
            <tbody>
                <tr>
                    <td class="strong" colspan="7"><strong>GHG Emissions</strong></td>
                    <td class="green2">Overall score<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="This is the percentage progress on the journey toward not causing any harm on this issue. ">?</button>
                    </td>
                    <td class="lightpurple" id="ghgek2a"></td>
                </tr>

                <tr>
                    <td class="a" colspan="8">Sustainable organizations eliminate all direct / operational
                        and indirect greenhouse
                        gas (GHG) net emissions, also known as Scope 1, Scope 2, and Scope 3 emissions.<button
                            type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                            data-bs-placement="left"
                            title="Scope 1 emissions result from the company's own operational activities.

Scope 2 emissions are from power plants that provide the company's purchased electricity.

Scope 3 emissions occur elsewhere in the company's value chain.

Net GHG emissions means total GHG emissions, less any emissions that are permanently sequestered or adequately offset.">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="lightyellow" colspan="8"><strong>Performance on operational emissions (Scope
                            1)</strong><button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Scope 1 direct GHG emissions occur from stationary and mobile sources that are owned or controlled by the company. That is, GHG emissions from combustion in owned or controlled boilers, furnaces, vehicles, etc..">?</button><br>
                        Does your organization do any of the following to manage its operational (Scope 1) GHG
                        emissions?
                        (Check all that apply; replace sample data with real organization data)
                    </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio1" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We do not currently monitor and record Scope 1 GHG
                        emissions.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                            data-bs-placement="left"
                            title="If this choice is checked, the score will be zero, even if other choices are checked. If this is selected, ignore the rest of the choices in the list and move on to the next question.">?</button><br>
                        (If selected, delete the sample percentage and skip to the next question.)
                    </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio2" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We monitor and record our operational GHG emissions, relative
                        to emissions in a
                        baseline reference year.<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="An organization's Scope 1 baseline year is the year when its recorded GHG emissions from its operations were the highest. This percentage is the reduction from that baseline amount, on the journey toward zero Scope 1 GHG emissions, with or without the help of certified carbon offsets.

Use appropriate conversion factors to express GHG emissions in consistent CO2 equivalent units. The GHG Emissions Calculation Tool may help: https://ghgprotocol.org/ghg-emissions-calculation-tool

Document data sources, estimation methodology and assumptions.">?</button> </td>
                </tr>

                <tr>
                    <td rowspan="2"></td>
                    <td class="a" colspan="6">Approximate percentage reduction of our operational Scope 1
                        GHG emissions, relative
                        to our chosen baseline year.</td>
                    <td class="yellow2"><input type="number" id="ghgek8a" name="num"></td>
                </tr>

                <tr>
                    <td class="yellow2" colspan="7"><input class="text" type="text" name="text"
                            placeholder="Notes!!"></td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio3" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We have set targets for operational emissions reductions,
                        relative to a chosen
                        baseline year, in line with IPCC recommendations.<button type="button"
                            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="The targets may be relative to a baseline year of the company's choosing. The intergovernmental Panel on Climate Change (IPCC) says that we must reduce emissions by 45% below 2010 levels by 2030; and reduce GHG emissions by 100% below 2010 levels by 2050.">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio4" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We met operational emissions targets for the reporting
                        period, with or without the
                        use of certified carbon offsets.<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="The quality of offsets is often problematic. If a company uses offsets to reduce emissions, it should choose schemes verified by the Gold Standard Carbon Credit Scheme.

These results can be compared with scores in previous reporting periods, to show a trend line. ">?</button></td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio5" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We have a science-based goal to be 100% carbon neutral on our
                        operational emissions,
                        regardless of organization growth.<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="If the science-based goal is associated with a date, it is more credible and forceful.">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="lightpurple" id="ghgec13a"></td>
                    <td class="a" colspan="7"><button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="The calculate button is at the end of the table.">?</button></td>
                </tr>

            </tbody>
        </table>
    </div>

    <div>
        <table class="table">
            <tbody>
                <tr>
                    <td class="lightyellow" colspan="8"><strong>Performance on emissions associated with the
                            generation of the
                            organization's purchased electricity (Scope 2)</strong><button type="button"
                            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Scope 2 GHG emissions are indirect emissions from power plants that generate the organization's purchased electricity. They are created during the production of the energy, and the organization is mutually accountable for the proportion of the power plant's GHGs associated with the energy that it uses. ">?</button><br>
                        Does your organization do any of the following to manage its Scope 2 GHG emissions associated
                        with your
                        purchased electricity?<br>
                        (Check all that apply; replace sample data with real organization data)</td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio6" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We do not currently monitor and record GHG emissions
                        associated with our purchased
                        electricity (Scope 2).<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="If this choice is checked, the score will be zero, even if other choices are checked. If this is selected, ignore the rest of the choices in the list and move on to the next question.">?</button><br>
                        (If selected, delete the sample percentage and skip to the next question.)
                    </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio7" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We monitor and record GHG emissions associated with our
                        purchased electricity (Scope
                        2).<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                            data-bs-placement="left" title="An organization's Scope 2 baseline year is the year when its indirect GHG emissions from power plants that generate the organization's purchased electricity were the highest. This percentage is the reduction from that baseline amount, on the journey toward zero Scope 2 GHG emissions, with or without the help of certified carbon offsets.

Use appropriate conversion factors to express GHG emissions in consistent CO2 equivalent units. The GHG Emissions Calculation Tool may help: https://ghgprotocol.org/ghg-emissions-calculation-tool

Document data sources, estimation methodology and assumptions.">?</button></td>
                </tr>

                <tr>
                    <td rowspan="2"></td>
                    <td class="a" colspan="5"> Approximate percentage reduction of our Scope 2 GHG
                        emissions, relative to our
                        chosen baseline year.</td>
                    <td class="yellow2" colspan="2"><input type="number" id="ghgek18a" name="num"></td>
                </tr>

                <tr>
                    <td class="yellow2" colspan="7"><input class="text" type="text" name="text"
                            placeholder="Notes!"></td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio8" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We have set targets for our electrical utility's Scope 2
                        emissions reductions
                        relative to a chosen baseline year, in line with IPCC recommendations.<button type="button"
                            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
                            title="The targets may be relative to a baseline year of the company's choosing. The intergovernmental Panel on Climate Change (IPCC) says that we must reduce emissions by 45% below 2010 levels by 2030; and reduce GHG emissions by 100% below 2010 levels by 2050.">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio9" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We met Scope 2 emission reduction targets for the reporting
                        period, with or without
                        the use of certified offsets.<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="The quality of offsets is often problematic. If a company uses offsets to reduce emissions, it should choose schemes verified by the Gold Standard Carbon Credit Scheme.

These results can be compared with scores in previous reporting periods, to show a trend line. ">?</button></td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio10" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We have a science-based goal to be 100% carbon neutral on our
                        Scope 2 emissions,
                        regardless of organization growth.<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="If the science-based goal is associated with a date, it is more credible and forceful.">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="lightpurple" id="ghgec23a"></td>
                    <td class="a" colspan="7"><button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="The calculate button is at the end of the table.">?</button></td>
                </tr>

            </tbody>
        </table>
    </div>

    <div>
        <table class="table">
            <tbody>
                <tr>
                    <td class="lightyellow" colspan="8"><strong>Performance on emissions that occur elsewhere in the
                            company's
                            value chain (Scope 3)</strong><button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Scope 3 GHG emissions usually account for 50%% to 90% of an organization's carbon footprint. They potentially come from the 15 sources listed in this question. Even though they are indirect and mostly emitted by others, the organization is mutually accountable for them.">?</button><br>
                        Does your organization do any of the following to manage its Scope 3 GHG emissions?<br>
                        (Check all that apply; replace sample data with real organization data)
                    </td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio11" name="yes" value="yes"></td>
                    <td class="a" colspan="7">"We do not currently monitor and record any Scope 3 GHG
                        emissions.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                            data-bs-placement="left"
                            title="If this choice is checked, the score will be zero, even if other choices are checked. If this is selected, ignore the rest of the choices in the list and move on to the next question.">?</button><br>
                        (If selected, skip to the next question.)"</td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio12" name="yes" value="yes"></td>
                    <td class="a" colspan="7">"We have reviewed the 15 sources / categories of Scope 3
                        emissions and identified
                        which are significant and relevant enough for our organization to measure and track.<button
                            type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
                            data-bs-placement="left"
                            title="For more information on these 15 sources of Scope 3 emissions, see the 'Technical Guidance for Calculating Scope 3 Emissions' by the GHG Protocol.">?</button><br>
                        (Check those deemed significant enough to track, unchecking inappropriate sample ones.)" </td>
                </tr>

                <tr>
                    <td rowspan="16"></td>
                    <td colspan="6">
                        <ul>
                            <li>Upstream (cradle-to-gate) GHGs from the production of acquired goods and services.</li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio13" name="yes" value="yes"></td>
                </tr>

                <td colspan="6">
                    <ul>
                        <li>Upstream (cradle-to-gate) GHGs from the production of acquired capital goods.</li>
                    </ul>
                </td>
                <td class="yellow2"><input type="checkbox" id="inlineradio14" name="yes" value="yes"></td>
                </tr>

                <tr>

                    <td colspan="6">
                        <ul>
                            <li>GHGs from fuel- and energy-related extraction, production and transportation, not
                                already included in
                                Scope 1 or 2. </li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio15" name="yes" value="yes"></td>
                </tr>

                <tr>

                    <td colspan="6">
                        <ul>
                            <li>GHGs from transportation of goods from tier 1 suppliers and between organization
                                facilities, in
                                non-organization vehicles.</li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio16" name="yes" value="yes"></td>
                </tr>

                <tr>

                    <td colspan="6">
                        <ul>
                            <li>GHGs from transportation, disposal and treatment of organization waste by third parties.
                            </li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio17" name="yes" value="yes"></td>
                </tr>

                <tr>

                    <td colspan="6">
                        <ul>
                            <li>GHGs from business travel of employees, in vehicles not owned / operated by the
                                organization.</li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio18" name="yes" value="yes"></td>
                </tr>

                <tr>

                    <td colspan="6">
                        <ul>
                            <li>GHGs from employees (including contractors and consultants) commuting to worksites, in
                                non-organization vehicles.</li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio19" name="yes" value="yes"></td>
                </tr>

                <tr>

                    <td colspan="6">
                        <ul>
                            <li>GHGs from the operation of upstream assets leased to others (lessees).</li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio20" name="yes" value="yes"></td>
                </tr>

                <tr>

                    <td colspan="6">
                        <ul>
                            <li>GHGs from the transportation, storage, distribution and retail of products, in vehicles
                                and facilities
                                not owned by the organization.</li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio21" name="yes" value="yes"></td>
                </tr>

                <tr>

                    <td colspan="6">
                        <ul>
                            <li>GHGs from processing of intermediate products sold by the organization to manufacturers.
                            </li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio22" name="yes" value="yes"></td>
                </tr>

                <tr>

                    <td colspan="6">
                        <ul>
                            <li>GHGs from end use of products and services sold by the organization.</li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio23" name="yes" value="yes"></td>
                </tr>

                <tr>

                    <td colspan="6">
                        <ul>
                            <li>GHGs from the end-of-life waste disposal and treatment of sold products.</li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio24" name="yes" value="yes"></td>
                </tr>

                <tr>
                    <td colspan="6">
                        <ul>
                            <li>GHGs from the operation of downstream assets leased to others (lessees).</li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio25" name="yes" value="yes"></td>
                </tr>

                <tr>
                    <td colspan="6">
                        <ul>
                            <li>GHGs from the operation of franchises.</li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio26" name="yes" value="yes"></td>
                </tr>

                <tr>
                    <td colspan="6">
                        <ul>
                            <li>GHGs from the operation of equity investments - the Scope 1 and Scope 2 emissions of
                                investees. </li>
                        </ul>
                    </td>
                    <td class="yellow2"><input type="checkbox" id="inlineradio27" name="yes" value="yes"></td>
                </tr>

                <tr>
                    <td colspan="6">Number of significant and relevant sources of Scope 3 GHGs</td>
                    <td class="lightpurple" id="ghgel44a"></td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio28" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We monitor and track our Scope 3 emissions from some, or all,
                        significant sources,
                        as identified above.<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Indirect Scope 3 GHGs potentially come from the 15 sources listed. This question identifies the sources that are most relevant to the organization. Then, the organization can establish a baseline year for each category and work on reducing those Scope 3 GHG emissions to zero, with or without the use of offsets.

When calculating the size of the GHG Emissions in the selected categories, this Calculation Tool may help: https://ghgprotocol.org/ghg-emissions-calculation-tool ">?</button>
                    </td>
                </tr>


                <tr>
                    <td rowspan="3"></td>
                    <td colspan="6">Number of significant sources, above, that we monitor and track</td>
                    <td class="yellow2"><input type="number" id="ghgek46a" name="num"></td>
                </tr>
                <tr>
                    <td colspan="6">Percent of significant sources that we monitor and track</td>
                    <td class="lightpurple" id="ghgek47a"></td>
                </tr>

                <tr>
                    <td class="yellow2" colspan="7"><input class="text" type="text" name="text"
                            placeholder="Notes!"></td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio29" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We have set targets for our overall Scope 3 emissions,
                        relative to a chosen baseline
                        year, in line with IPCC recommendations.<button type="button"
                            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="The targets may be relative to a baseline year of the company's choosing. The intergovernmental Panel on Climate Change (IPCC) says that we must reduce emissions by 45% below 2010 levels by 2030; and reduce GHG emissions by 100% below 2010 levels by 2050.
">?</button></td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio30" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We met our overall Scope 3 emissions targets for the
                        reporting period, with or
                        without the use of certified offsets.<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="The quality of offsets is often problematic. If a company uses offsets to reduce emissions, it should choose schemes verified by the Gold Standard Carbon Credit Scheme.

These results can be compared with scores in previous reporting periods, to show a trend line. ">?</button></td>
                </tr>

                <tr>
                    <td class="yellow2"><input type="checkbox" id="inlineradio31" name="yes" value="yes"></td>
                    <td class="a" colspan="7">We have a science-based goal to be 100% carbon neutral on our
                        Scope 3 emissions,
                        regardless of organization growth.<button type="button" class="btn btn-outline-info btn-sm"
                            data-bs-toggle="tooltip" data-bs-placement="left"
                            title="If the science-based goal is associated with a date, it is more credible and forceful.">?</button>
                    </td>
                </tr>

                <tr>
                    <td class="lightpurple" id="ghgec52a"></td>
                    <td colspan="7"><button id="but" class="btn btn-outline-success"
                            onclick="ghg()">Calculate!</button></td>
                </tr>




            </tbody>
        </table>
    </div>

    <nav class="page">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="/procurement">Previous</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">Current Page</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="/non-ghg-emission" onclick="ghg()">Next</a>
            </li>
        </ul>
    </nav>

    <script src="/frontend/ghge.js" charset="utf-8"></script>

</body>

</html>
