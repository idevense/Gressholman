var acc = document.getElementsByClassName( 'accordion' );
var i;

for ( i = 0; i < acc.length; i++ ) {
  acc[i].addEventListener( 'click', function() {

    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
	this.classList.toggle( 'expand' );
	setClass( acc, 'expand', 'remove' );

	/* Toggle between hiding and showing the active panel */
    const panel = this.nextElementSibling;
    if ( panel.style.maxHeight ) {
		panel.style.maxHeight = null;
		} else {
		panel.style.maxHeight = panel.scrollHeight + 'px';
		}
		jQuery( this )
			.find( 'i' )
			.toggleClass( 'fa-arrow-circle-o-down' )
			.toggleClass( 'fa-arrow-circle-o-right' );
  });
}

function setClass( els, className, fnName ) {
	for ( i = 0; i < els.length; i++ ) {
		els[i].classList[fnName]( className );
		if ( els[i].style.maxHeight ) {
			els[i].style.maxHeight = null;
		} else {
		els[i].style.maxHeight = els[i].scrollHeight + 'px';
		}
	}
}
