<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'Design Ground Motions';

    // Use hazards level nav file
    include_once 'functions.inc.php';
    ob_start();
    include '../_navigation.inc.php';
    $NAVIGATION = ob_get_clean();

    include 'template.inc.php';
  }
?>

<p class="alert info">
  Due to insufficient resources and the recent development of similar web tools
  by third parties, this summer the USGS will be streamlining the two U.S.
  Seismic Design Maps web applications described below. Whereas the current
  applications each interact with users through a graphical user interface
  (GUI), the new web services will receive the inputs (e.g. latitude and
  longitude) in the form of a web address and return the outputs (e.g.
  S<sub>DS</sub> and S<sub>D1</sub>) in text form, without supplementary
  graphics. Though designed primarily to be read by the aforementioned
  third-party web GUIs (e.g. from <a href="https://asce7hazardtool.online/">ASCE</a>, 
	<a href="https://seismicmaps.org/">SEAOC/OSHPD</a>, 
	and <a href="https://hazards.atcouncil.org/">ATC</a>), 
	the text outputs are also human-readable. To preview
  the new web services, <a href="/ws/designmaps/">please click here</a>.
  Step-by-step instructions for using one of these web services,
  namely that for the recently published 2016 ASCE 7 Standard, <a
  href="./step-by-step-instructions-for-webservice_v3.pdf">are posted here</a>.
</p>

<p>
  Engineers should use these maps and tools for seismic design, not the hazard
  maps available elsewhere on the USGS website.
</p>

<hr/>

<h4><a href="usdesign.php">U.S. Seismic Design Maps</a></h4>

<p>
  The USGS collaborates with organizations (such as the Building Seismic Safety
  Council) that develop model building and bridge design codes to make seismic
  design parameter values available to engineers. The design code developers
  first decide how USGS earthquake hazard information should be applied in
  design practice. Then the USGS calculates gridded values of seismic design
  parameters based on USGS hazard values in accordance with design code
  procedures. The <i>U.S. Seismic Design Maps</i> application provides seismic
  design parameter values from the following design code editions:
</p>

<i><ul>
  <li>2013 ASCE/SEI 41</li>
  <li>2012/09/06 International Building Code</li>
  <li>2010/05 ASCE/SEI 7 Standard</li>
  <li>2009/03 NEHRP Recommended Seismic Provisions</li>
  <li>2009 AASHTO Guide Specifications for LRFD Seismic Bridge Design</li>
</ul></i>

<p>
  The USGS also provides <a href="datasets/">data files</a> and <a href="pdfs/">maps</a> of these gridded design values.
</p>

<h4><a href="/designmaps/beta/us/">U.S. Seismic Design Maps (Beta)</a></h4>

<p>
  This Beta version of the <i>U.S. Seismic Design Maps</i> application will
  eventually replace the current version of the application (see above entry)
  after all of the currently-referenced design code editions are ported over to
  it. Currently, the Beta version of the application provides parameter values
  from the 2015 National Earthquake Hazards Reduction Program
  (<a href="http://www.nehrp.gov/">NEHRP</a>) Recommended Seismic Provisions
  for New Buildings and Other Structures. This design code reference document
  provides seismic design parameter values that are proposed for use in future
  editions of major U.S. building codes (<i>International Building Code, ASCE 7
  Standard</i>).
</p>

<h4><a href="rtgm.php">Risk-Targeted Ground Motion Calculator</a></h4>

<p>
  This tool is used to calculate risk-targeted ground motion values from
  probabilistic seismic hazard curves in accordance with the site-specific
  ground motion procedures defined in &ldquo;Method 2&rdquo; of
  <i>2010 ASCE 7 Standard</i> Section 21.2.1.2.
</p>

<p>
  The vast majority of engineering projects in the U.S. will require the use of
  the <i>U.S. Seismic Design Maps</i> application (see above) rather than the
  <i>Risk-Targeted Ground Motion Calculator</i>.
</p>

<hr/>
<a href="choosing.php">Help Selecting a Seismic Design Tool</a>
