<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Employee Wages</title>
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
        <td class="strong1" colspan="6"><strong>Employee Wages</strong></td>
        <td class="blue">Overall score <button type="button" class="btn btn-outline-info btn-sm"
            data-bs-toggle="tooltip" data-bs-placement="left"
            title="This is the percentage progress on the journey toward not causing any harm on this issue.">?</button>
        </td>
        <td class="lightpurple" id="wagk2a"></td>
      </tr>

      <tr>
        <td class="a" colspan="8">Sustainable organizations pay their employees at least a living wage, so that they can
          afford a decent standard of living for their families.<button type="button"
            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="A sustainable company ensures that all its employees and their families have the means to afford access to health care, a nutritious diet and to be free of concerns about meeting basic needs. That is, that they earn at least a living wage  that affords a decent standard of living for workers and their families. 

Living wage estimates vary by region and guidance is offered by government agencies, academics and/or NGOs.">?</button>
        </td>
      </tr>

      <tr>
        <td class="lightblue" colspan="8"><strong>Performance on employee wages</strong><button type="button"
            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
            title="A sustainable organization pays all its employees at least a living wage. A living wage affords a decent standard of living for workers and their families. It ensures that all its employees and their families have the means to afford health coverage, to eat a nutritious diet and to be free of concerns about meeting basic needs.

Living wage estimates vary by region and guidance is offered by government agencies, academics and/or NGOs. In most regions, the living wage is higher than the legal minimum wage or poverty-line wage. Living wage calculations should focus on employee compensation with respect to standard working hours: figures should exclude overtime pay as well as productivity bonuses and allowances, unless they are guaranteed.">?</button><br>
          Does your organization do any of the following to manage employee wages?<br>
          (Check all that apply; replace sample data with real organization data)</td>
      </tr>

      <tr>
        <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio1" value="yes"></td>
        <td class="a" colspan="7">The organization is a sole proprietorship with no employees.<button type="button"
            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
            title="If this choice is checked, the score will be 100%, since the company is doing no harm in this issue. ">?</button><br>
          (If selected, you score 100%. Skip to the next question)</td>
      </tr>

      <tr>
        <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio2" value="yes"></td>
        <td class="a" colspan="7">We do not currently monitor and record whether we pay our employees at least a living
          wage.<button type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip"
            data-bs-placement="left"
            title="If this choice is checked, the score will be zero, even if other choices are checked. If this is selected, ignore the rest of the choices in the list and move on to the next question.">?</button><br>
          (If selected, delete the sample percentage and skip to the next question.)</td>
      </tr>

      <tr>
        <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio3" value="yes"></td>
        <td class="a" colspan="7">We monitor and record whether we pay our employees at least a minimum wage.<button
            type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Minimum wages vary by region and are usually below a poverty-line wage.  

Estimate the percentage on this scale, rounding up: 
0%, 10%, 20% … 80%, 90%, 100%.

Document data sources, estimation methodology and assumptions in the Notes area.">?</button></td>
      </tr>

      <tr>
        <td></td>
        <td class="a" colspan="5">Approximate percentage of employees who are paid at least a minimum wage</td>
        <td class="yellow2" colspan="2"><input type="number" id="wagk9a" name="num"></td>
      </tr>

      <tr>
        <td class="yellow2"><input type="checkbox" id="inlineradio4" name="yes" value="yes"></td>
        <td class="a" colspan="7">We monitor and record whether we pay our employees at least a living wage.<button
            type="button" class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="A living wage affords a decent standard of living for workers and their families. It ensures that all its employees and their families have the means to afford health coverage, to eat a nutritious diet and to be free of concerns about meeting basic needs.

Living wage estimates vary by region and guidance is offered by government agencies, academics and/or NGOs (e.g., see https://www.ontariolivingwage.ca/living_wage_by_region). 

Living wage calculations should focus on employee compensation with respect to standard working hours: figures should exclude overtime pay as well as productivity bonuses and allowances, unless they are guaranteed.

Estimate the percentage on this scale, rounding up: 
0%, 10%, 20% … 80%, 90%, 100%.

Document data sources, estimation methodology and assumptions in the Notes area.">?</button> </td>
      </tr>

      <tr>
        <td rowspan="2"></td>
        <td class="a" colspan="5">Approximate percentage of employees who are paid at least a living wage</td>
        <td class="yellow2" colspan="2"><input type="number" id="wagk11a" name="num"></td>
      </tr>

      <tr>
        <td class="yellow2" colspan="7"><input type="text" name="text" class="text" placeholder="Notes!!"></td>

      </tr>

      <tr>
        <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio5" value="yes"></td>
        <td class="a" colspan="7">We have set living wage targets.<button type="button"
            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
            title=" The targets may be relative to a baseline year of the company's choosing.">?</button></td>
      </tr>

      <tr>
        <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio6" value="yes"></td>
        <td class="a" colspan="7">We met living wage targets, for the reporting period.<button type="button"
            class="btn btn-outline-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="left"
            title="These results can be compared with scores in previous reporting periods, to show a trend line.  ">?</button>
        </td>
      </tr>

      <tr>
        <td class="yellow2"><input type="checkbox" name="yes" id="inlineradio7" value="yes"></td>
        <td class="a" colspan="7">We have a science-based goal of paying 100% of employees at least a living wage,
          regardless of organization growth.<button type="button" class="btn btn-outline-info btn-sm"
            data-bs-toggle="tooltip" data-bs-placement="left"
            title="If the science-based goal is associated with a date, it is more credible and forceful.">?</button>
        </td>
      </tr>

      <tr>
        <td class="lightpurple" id="wagc16a"></td>
        <td colspan="7"><button id="but" class="btn btn-outline-success" onclick="wages()">Calculate!</button></td>
      </tr>

    </tbody>
  </table>

  <nav class="page">
    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="/Encroachment">Previous</a></li>
      <li class="page-item active" aria-current="page">
        <span class="page-link">Current Page</span>
      </li>
      <li class="page-item">
        <a class="page-link" href="/health" onclick="wages()">Next</a>
      </li>
    </ul>
  </nav>

  <script src="/frontend/wages.js" charset="utf-8"></script>

</body>

</html>