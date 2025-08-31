---
layout: page
title: Calculators and info I use when brewing
image: this is my vodka.jpg
comments: false
author: paul
description: Brew Calculators
---
<div class="row w-100 rounded border bg-white d-print-none">
 <a href="javascript:;" data-image="{{ site.url }}{{ site.thumbnails }}{{ page.image }}" rel="lightbox" class="col-md-3 featuredImage m-0 p-0" style="background: url('{{ site.url }}{{ site.thumbnails }}{{ page.image }}') no-repeat center top / cover" >{{ page.image }}<img class="d-none d-print-block" src="{{ site.url }}{{ site.thumbnails }}{{ page.image }}" alt="{{ page.image }}" title="{{ page.image }}" /></a>
 <div class="col-md-9" >
<h1>{{ page.title }}</h1>
<p>
I make my own beer, and my own spirits. 🤣<br />
This is some calculators, and info I regularly use. <br />
</p>
 </div>
</div>
<p>&nbsp; </p>


<div class="row bg-white rounded w-100 p-3 shadow-sm border">
	<div class="col-md-12">

<!-- ABV Calc -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card shadow-lg rounded-4">
          <div class="card-header bg-primary text-white text-center fs-4 fw-bold">
            ABV From Gravity Calculator
          </div>
          <div class="card-body">

            <form id="abvCalcForm">
              <div class="mb-3">
                <label for="og" class="form-label">Original Gravity (OG)</label>
                <input type="number" step="0.001" class="form-control" id="og" placeholder="e.g. 1.050" required>
              </div>

              <div class="mb-3">
                <label for="fg" class="form-label">Final Gravity (FG)</label>
                <input type="number" step="0.001" class="form-control" id="fg" placeholder="e.g. 1.010" required>
              </div>

              <button type="submit" class="btn btn-primary w-100">Calculate ABV</button>
            </form>

            <div id="abvresult" class="alert alert-info mt-4 d-none text-center fs-5"></div>

          </div>
        </div>

      </div>
    </div>
  </div>


<!-- Dilution Calc -->  
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card shadow-lg rounded-4">
          <div class="card-header bg-success text-white text-center fs-4 fw-bold">
            Dilution Calculator
          </div>
          <div class="card-body">

            <form id="dilutionCalcForm">
              <div class="mb-3">
                <label for="startABV" class="form-label">Starting % ABV</label>
                <input type="number" step="0.1" class="form-control" id="startABV" placeholder="e.g. 65" required>
              </div>

              <div class="mb-3">
                <label for="startVol" class="form-label">Starting Alcohol Volume (litres)</label>
                <input type="number" step="0.01" class="form-control" id="startVol" placeholder="e.g. 10" required>
              </div>

              <div class="mb-3">
                <label for="desiredABV" class="form-label">Desired % ABV</label>
                <input type="number" step="0.1" class="form-control" id="desiredABV" placeholder="e.g. 40" required>
              </div>

              <button type="submit" class="btn btn-success w-100">Calculate</button>
            </form>

            <div id="dilutionresult" class="alert alert-info mt-4 d-none text-center fs-5"></div>

          </div>
        </div>

      </div>
    </div>
  </div>


<!-- Make a bottle Calc --> 
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card shadow-lg rounded-4">
          <div class="card-header bg-warning text-dark text-center fs-4 fw-bold">
            Make A Bottle Dilution Calculator
          </div>
          <div class="card-body">

            <form id="bottleCalcForm">
              <div class="mb-3">
                <label for="bottlefinalVol" class="form-label">What Volume Do You Want To Make (L)</label>
                <input type="number" step="0.01" class="form-control" id="bottlefinalVol" placeholder="e.g. 0.75" required>
              </div>

              <div class="mb-3">
                <label for="bottledesiredABV" class="form-label">% ABV You Want To Make</label>
                <input type="number" step="0.1" class="form-control" id="bottledesiredABV" placeholder="e.g. 40" required>
              </div>

              <div class="mb-3">
                <label for="bottlesourceABV" class="form-label">% ABV Of The Alcohol You Are Using</label>
                <input type="number" step="0.1" class="form-control" id="bottlesourceABV" placeholder="e.g. 95" required>
              </div>

              <button type="submit" class="btn btn-warning w-100">Calculate</button>
            </form>

            <div id="bottleresult" class="alert alert-info mt-4 d-none text-center fs-5"></div>

          </div>
        </div>

      </div>
    </div>
  </div>

 <!-- Sugar wash Calc -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card shadow-lg rounded-4">
          <div class="card-header bg-dark text-white text-center fs-4 fw-bold">
            Sugar Wash Calculator
          </div>
          <div class="card-body">

            <form id="sugarWashForm">
              <div class="mb-3">
                <label for="sugarWashvolume" class="form-label">Desired Total Volume (L)</label>
                <input type="number" step="0.1" class="form-control" id="sugarWashvolume" placeholder="e.g. 25" required>
              </div>

              <div class="mb-3">
                <label for="sugarWashog" class="form-label">Desired Original Gravity (OG)</label>
                <input type="number" step="0.001" class="form-control" id="sugarWashog" placeholder="e.g. 1.080" required>
              </div>

              <button type="submit" class="btn btn-dark w-100">Calculate</button>
            </form>

            <div id="sugarWashresult" class="alert alert-info mt-4 d-none text-center fs-5"></div>

          </div>
        </div>

      </div>
    </div>
  </div>
	

 <!-- Sugar wash estimator Calc -->
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <div class="card shadow-lg rounded-4">
          <div class="card-header bg-info text-white text-center fs-4 fw-bold">
            Sugar Wash Estimator Calculator
          </div>
          <div class="card-body">

            <form id="sugarWashEstimatorForm">
              <div class="mb-3">
                <label for="sugarwashsugar" class="form-label">Desired Sugar (kg)</label>
                <input type="number" step="0.01" class="form-control" id="sugarwashsugar" placeholder="e.g. 6" required>
              </div>

              <div class="mb-3">
                <label for="sugarwashwater" class="form-label">Desired Water (L)</label>
                <input type="number" step="0.1" class="form-control" id="sugarwashwater" placeholder="e.g. 25" required>
              </div>

              <button type="submit" class="btn btn-info w-100">Estimate</button>
            </form>

            <div id="sugarwashestresult" class="alert alert-info mt-4 d-none text-center fs-5"></div>

          </div>
        </div>

      </div>
    </div>
  </div>


	</div>
</div>
