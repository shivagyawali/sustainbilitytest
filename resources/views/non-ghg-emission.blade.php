<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Non-GHG Emissions</title>
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
          src="https://futurefitbusiness.org/wp-content/uploads/2019/04/sustainability-advantage.png" width="140"
          height="50"></a>
      </button>
    </div>
    </div>
  </nav><br>
  <table class="table">
    <tbody>
      <tr>
        <td class="strong" colspan="6"><strong>Non-GHG Emissions</strong></td>
        <td class="green2">Overall score<button type="button" class="btn btn-outline-info btn-sm"
            data-bs-toggle="tooltip" data-bs-placement="left"
            title="This is the percentage progress on the journey toward not causing any harm on this issue. ">?</button>
        </td>
        <td class="lightpurple" id="nghgk2a"></td>
      </tr>

      <tr>
        <td class="a" colspan="8">Sustainable organizations eliminate all harmful solid, liquid and gaseous
          emissions.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
            data-bs-placement="left"
            title="A sustainable company eliminates harmful substances intentionally or accidentally discharged directly to the environment. Harmful emissions include:
     * Harmful solid emissions (e.g. scarce metals, excess hazardous pesticides, particulate matter)
     * Harmful liquid emissions (e.g. spills, liquid toxic waste, chemical fluids).
     * Harmful gaseous emissions (e.g. VOCs, SOx, NOx, other air pollutants, toxic fumes) 

(Note: These do not include liquid, gaseous, or solid wastes which are contained by the company and sent to a third-party for treatment or disposal. They are included in Waste.)">?</button>
        </td>
      </tr>
      <tr>
        <td class="lightyellow" colspan="8"><strong>Performance on non-GHG emissions <button type="button"
              class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="For many organizations, emissions of some sort are an unintended consequence of operational activity. Some emitted substances are harmful at any amount due to their inherent toxicity to people or the environment, while others might cause harm only by contributing to a local or global build-up in concentration – this is the case for some common air pollutants such as nitrous oxide.

To be sustainable, a company must: 
* eliminate harmful solid emissions 
  (e.g. scarce metals, hazardous fertilizers);
* eliminate harmful liquid emissions 
  (e.g. spills, chemical fluids).
* eliminate harmful gaseous emissions 
  (e.g. air pollutants, toxic fumes); ">?</button><br></strong>
          Does your organization do any of the following to manage its non-GHG solid, liquid and gaseous emissions?<br>
          (Check all that apply; replace sample data with real organization data)</td>
      </tr>

      <tr>
        <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio1" value="yes"></td>
        <td class="a" colspan="7">We do not currently monitor and record our non-GHG emissions.<button type="button"
            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
            title="If this choice is checked, the score will be zero, even if other choices are checked. If this is selected, ignore the rest of the choices in the list and move on to the next question.">?</button><br>
          (If selected, delete the sample percentages and skip to the next question.)
        </td>
      </tr>

      <tr>
        <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio2" value="yes"></td>
        <td class="a" colspan="7">We monitor and record our non-GHG solid, liquid and gaseous emissions.<button
            type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="To be sustainable, a company must: 
* eliminate harmful solid emissions 
    (e.g. scarce metals, hazardous fertilizers)
* eliminate harmful liquid emissions 
    (e.g. spills, chemical fluids)
* eliminate harmful gaseous emissions 
    (e.g. air pollutants, toxic fumes)

Estimate the percentage on this scale, rounding up: 
0%, 10%, 20% … 80%, 90%, 100%.

Document data sources, estimation methodology and assumptions in the Notes area.  ">?</button></td>
      </tr>

      <tr>
        <td rowspan="4"></td>
        <td colspan="5">Approximate percentage of non-GHG solid emissions that do not cause harm</td>
        <td class="yellow2" colspan="2"><input type="number" id="nghgk8a" name="num"></td>
      </tr>

      <tr>
        <td colspan="5">Approximate percentage of non-GHG liquid emissions that do not cause harm</td>
        <td class="yellow2" colspan="2"><input type="number" id="nghgk9a" name="num"></td>

      </tr>

      <tr>
        <td colspan="5">Approximate percentage of non-GHG gaseous emissions that do not cause harm</td>
        <td class="yellow2" colspan="2"><input type="number" id="nghgk10a" name="num"></td>

      </tr>

      <tr>
        <td class="yellow2" colspan="7"><input type="text" name="text" class="text" placeholder="Notes!!"></td>

      </tr>

      <tr>
        <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio3" value="yes"></td>
        <td class="a" colspan="7">We have set targets for our non-GHG solid, liquid and gaseous emissions.<button
            type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
            title=" The targets may be relative to a baseline year of the company's choosing.">?</button></td>
      </tr>

      <tr>
        <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio4" value="yes"></td>
        <td class="a" colspan="7">We met targets for our non-GHG solid, liquid and gaseous emissions, for the reporting
          period.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
            data-bs-placement="left"
            title="These results can be compared with scores in previous reporting periods, to show a trend line.  ">?</button>
        </td>
      </tr>

      <tr>
        <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio5" value="yes"></td>
        <td class="a" colspan="7">We have a science-based goal of zero harmful non-GHG emissions, regardless of
          organization growth.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
            data-bs-placement="left"
            title="If the science-based goal is associated with a date, it is more credible and forceful.">?</button>
        </td>
      </tr>

      <tr>
        <td class="lightpurple" id="nghgc15a"></td>
        <td colspan="7"><button id="but" class="btn btn-outline-success" onclick="nonghg()">Calculate!</button></td>
      </tr>

    </tbody>
  </table>

  <nav class="page">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="/GHG Emission">Previous</a></li>
      <li class="page-item active" aria-current="page">
        <span class="page-link">Current Page</span>
      </li>
      <li class="page-item">
        <a class="page-link" href="/waste" onclick="nonghg()">Next</a>
      </li>
    </ul>
  </nav>

  <script src="/frontend/nghge.js" charset="utf-8"></script>

</body>

</html>