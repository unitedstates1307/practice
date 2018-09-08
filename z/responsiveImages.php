<!DOCTYPE html>
<html>
<head>
	<title> gay css practice grid </title>	
	<link rel="stylesheet" type="text/css" media="all" href="responsiveImages.css" >
	<style>

</style>

</head>
<body>
<main class="main-content">

  <h1 class="post-title">The Image Alignment Conundrum</h1>
  <div class="entry-content">
    <p class="intro">The challenge seems simple on paper but hard in CSS: Without changing the HTML markup, allow for various alignments in a single view, including centered elements, floated elements, half-bleed elements, and full-bleed elements. It seems the best approach to half- and full-bleed is using CSS Grid, but that stands in the way of floats.</p>
    <p><em>Current solution: Regular content is aligned using standard <code>max-width</code> and <code>margin: 0 auto;</code>. Special alignment <code>&lt;figure&gt;</code> elements are turned into grid containers spanning the full width of the available space using a ridiculous <code>calc</code> formula, and the images and captions within are placed on the individual grids. Salient CSS bits start at line 69.</em></p>
    <p class="intro">Descriptions of each alignment are found under each image.</p>
    <p class="intro">Please fork and send your suggested solutions to <a href="https://twitter.com/mor10">@mor10 on Twitter</a>.</p>
    <h2>Centered</h2>
    <figure class="align-center">
      <a href="https://unsplash.com/@andozo?photo=vMRMYoLQzwo" target="_blank" rel="nofollow">
        <img src="https://source.unsplash.com/vMRMYoLQzwo/1200x800" alt="">
      </a>
      <figcaption class="caption">Oslo. Photo by Andreas R�nningen</figcaption>
    </figure>
    <p>Elements with the class <code>align-center</code> are centered with a max width matching the max width of the main content. If an element is narrower than the width, it is center aligned leaving equal space on both sides.</p> 
    <h2>Left-aligned</h2>
    <figure class="align-left">
      <a href="https://unsplash.com/@andozo?photo=xkMArBuwK44" target="_blank" rel="nofollow">
        <img src="https://source.unsplash.com/xkMArBuwK44/400x400" alt="">
      </a>
      <figcaption class="caption">Pyramid. Photo by Andreas R�nningen</figcaption>
    </figure>
  <p>Elements with the class <code>align-left</code> have a width of 50% of the available space and are floated to the left with adjacent content filling the empty space on the right.</p>
<p><em>Some dummy text to allow text wrapping:</em> Preserved defective offending he daughters on or. Rejoiced prospect yet material servants out answered men admitted. Sportsmen certainty prevailed suspected am as. Add stairs admire all answer the nearer yet length. Advantages prosperous remarkably my inhabiting so reasonably be if. Too any appearance announcing impossible one. Out mrs means heart ham tears shall power every. </p>
<p><em>More dummy text:</em> Preserved defective offending he daughters on or. Rejoiced prospect yet material servants out answered men admitted. Sportsmen certainty prevailed suspected am as. Add stairs admire all answer the nearer yet length. Advantages prosperous remarkably my inhabiting so reasonably be if. Too any appearance announcing impossible one. Out mrs means heart ham tears shall power every. </p>
    <h2>Right-aligned</h2>
    <figure class="align-right">
      <a href="https://unsplash.com/@andozo?photo=lr81rOg-gys" target="_blank" rel="nofollow">
        <img src="https://source.unsplash.com/lr81rOg-gys/400x400" alt="">
      </a>
      <figcaption class="caption">Barn owl. Photo by Andreas R�nningen</figcaption>
    </figure>
    <p>Elements with the class <code>align-right</code> have a width of 50% of the available space and are floated to the right with adjacent content filling the empty space on the left.</p>
    <p><em>Some dummy text to allow text wrapping:</em> Preserved defective offending he daughters on or. Rejoiced prospect yet material servants out answered men admitted. Sportsmen certainty prevailed suspected am as. Add stairs admire all answer the nearer yet length. Advantages prosperous remarkably my inhabiting so reasonably be if. Too any appearance announcing impossible one. Out mrs means heart ham tears shall power every. </p>
<p><em>More dummy text:</em> Preserved defective offending he daughters on or. Rejoiced prospect yet material servants out answered men admitted. Sportsmen certainty prevailed suspected am as. Add stairs admire all answer the nearer yet length. Advantages prosperous remarkably my inhabiting so reasonably be if. Too any appearance announcing impossible one. Out mrs means heart ham tears shall power every. </p>
    <h2>Half-bleed</h2>
    <figure class="align-half">
      <a href="https://unsplash.com/@andozo?photo=KUfkX6gVwBU" target="_blank" rel="nofollow">
        <img src="https://source.unsplash.com/KUfkX6gVwBU/2600x800" alt="">
      </a>
      <figcaption class="caption">Oslo. Photo by Andreas R�nningen</figcaption>
    </figure>
    <p>Elements with the class <code>align-half</code> are displayed as "half-bleed" meaning they extend on the left and right to fill <em>half the available space</em> between the outer edge of the <code>main</code> container and the <code>entry content</code>.</p>
    <h2>Full-bleed</h2> 
    <figure class="align-full">
      <a href="https://unsplash.com/@andozo?photo=i9FLJwYhVQs" target="_blank" rel="nofollow">
        <img src="https://source.unsplash.com/i9FLJwYhVQs/2600x800" alt="">
      </a>
      <figcaption class="caption">Lake. Photo by Andreas R�nningen</figcaption>
    </figure>
    <p>Elements with the class <code>align-full</code> are displayed as full-bleed meaning they extend on the left and right to fill <em>all available space</em> between the outer edge of the <code>main</code> container.</p>
    <h2>Align full left</h2> 
    <figure class="align-full-left">
      <a href="https://unsplash.com/@andozo?photo=i9FLJwYhVQs" target="_blank" rel="nofollow">
        <img src="https://source.unsplash.com/i9FLJwYhVQs/2600x800" alt="">
      </a>
      <figcaption class="caption">Lake. Photo by Andreas R�nningen</figcaption>
    </figure>
    <p>Elements with the class <code>align-full-left</code> are extgended to the left edge and end at the right border of the content container with the caption appearing to the right.</p>
    <h2>Align full right</h2> 
    <figure class="align-full-right">
      <a href="https://unsplash.com/@andozo?photo=i9FLJwYhVQs" target="_blank" rel="nofollow">
        <img src="https://source.unsplash.com/i9FLJwYhVQs/2600x800" alt="">
      </a>
      <figcaption class="caption">Lake. Photo by Andreas R�nningen</figcaption>
    </figure>
    <p>Elements with the class <code>align-full-right</code> are extgended to the right edge and end at the left border of the content container with the caption appearing to the left.</p>
    <h2>Align half left</h2> 
    <figure class="align-half-left">
      <a href="https://unsplash.com/@andozo?photo=i9FLJwYhVQs" target="_blank" rel="nofollow">
        <img src="https://source.unsplash.com/i9FLJwYhVQs/2600x800" alt="">
      </a>
      <figcaption class="caption">Lake. Photo by Andreas R�nningen</figcaption>
    </figure>
    <p>Elements with the class <code>align-half-left</code> are extgended to the left edge and takes up half the available space on the right</p>
    <h2>Align half right</h2> 
    <figure class="align-half-right">
      <a href="https://unsplash.com/@andozo?photo=i9FLJwYhVQs" target="_blank" rel="nofollow">
        <img src="https://source.unsplash.com/i9FLJwYhVQs/2600x800" alt="">
      </a>
      <figcaption class="caption">Lake. Photo by Andreas R�nningen</figcaption>
    </figure>
    <p>Elements with the class <code>align-half-right</code> are extgended to the right edge and takes up half the remaining space on the left;</p>
    <h2>No alignment</h2>
    <figure class="card align-none">
      <a href="https://unsplash.com/@andozo?photo=S2YssLw97l4" target="_blank" rel="nofollow">
        <img src="https://source.unsplash.com/S2YssLw97l4/2600x1600" alt="">
      </a>
      <figcaption class="caption">Sparklers and Warm Souls. Photo by Andreas R�nningen</figcaption>
    </figure>
    <p>Elements with the class <code>align-none</code> have no alignment and should appear as part of the normal content flow.</p>
    <p><em>Dummy text to have additional text to show:</em> Blind would equal while oh mr do style. Lain led and fact none. One preferred sportsmen resolving the happiness continued. High at of in loud rich true. Oh conveying do immediate acuteness in he. Equally welcome her set nothing has gravity whether parties. Fertile suppose shyness mr up pointed in staying on respect. </p>
  </div><!-- .entry-content -->
</main><!-- .main-content -->
</body>
</html>
