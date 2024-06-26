$( '#multiple-select-clear-field' ).select2( {
    theme: "bootstrap-5",
    maximumSelectionLength: 3, // Limit maximum selections to 3
    minimumSelectionLength: 1, // Require at least 1 selection
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
} );

$( '#multiple-select-clear-field-max-2' ).select2( {
    theme: "bootstrap-5",
    maximumSelectionLength: 2, // Limit maximum selections to 3
    minimumSelectionLength: 1, // Require at least 1 selection
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
} );

// Disable checkbox
function verifyMathDisabled() {
    //disable all the radio button
    $("input[name='math_score']").prop('disabled', false);

    //get the value if checkbox is checked
    var checked = document.getElementById("mathChecked").checked;
    if (checked == true) {
    $value = $("input[name='math_score']").prop('value')
    $("input[name='math_score']").prop('disabled', true);
   }
}

function verifyPhysicsDisabled() {
    $("input[name='physics_score']").prop('disabled', false);
    var checked = document.getElementById("physicsChecked").checked;
    if (checked == true) {
    $value = $("input[name='physics_score']").prop('value')
    $("input[name='physics_score']").prop('disabled', true);
   }
}

function verifyChemistryDisabled() {
    $("input[name='chemistry_score']").prop('disabled', false);
    var checked = document.getElementById("chemistryChecked").checked;
    if (checked == true) {
    $value = $("input[name='chemistry_score']").prop('value')
    $("input[name='chemistry_score']").prop('disabled', true);
   }
}

function verifyBiologyDisabled() {
    $("input[name='biology_score']").prop('disabled', false);
    var checked = document.getElementById("biologyChecked").checked;
    if (checked == true) {
    $value = $("input[name='biology_score']").prop('value')
    $("input[name='biology_score']").prop('disabled', true);
   }
}

function verifyEconomyDisabled() {
    $("input[name='economy_score']").prop('disabled', false);
    var checked = document.getElementById("economyChecked").checked;
    if (checked == true) {
    $value = $("input[name='economy_score']").prop('value')
    $("input[name='economy_score']").prop('disabled', true);
   }
}

function verifyGeographyDisabled() {
    $("input[name='geography_score']").prop('disabled', false);
    var checked = document.getElementById("geographyChecked").checked;
    if (checked == true) {
    $value = $("input[name='geography_score']").prop('value')
    $("input[name='geography_score']").prop('disabled', true);
   }
}

function verifySosiologyDisabled() {
    $("input[name='sosiology_score']").prop('disabled', false);
    var checked = document.getElementById("sosiologyChecked").checked;
    if (checked == true) {
    $value = $("input[name='sosiology_score']").prop('value')
    $("input[name='sosiology_score']").prop('disabled', true);
   }
}

function verifyHistoryDisabled() {
    $("input[name='history_score']").prop('disabled', false);
    var checked = document.getElementById("historyChecked").checked;
    if (checked == true) {
    $value = $("input[name='history_score']").prop('value')
    $("input[name='history_score']").prop('disabled', true);
   }
}

function verifyLanguageDisabled() {
    $("input[name='language_score']").prop('disabled', false);
    var checked = document.getElementById("languageChecked").checked;
    if (checked == true) {
    $value = $("input[name='language_score']").prop('value')
    $("input[name='language_score']").prop('disabled', true);
   }
}

function verifyArtDisabled() {
    $("input[name='art_score']").prop('disabled', false);
    var checked = document.getElementById("artChecked").checked;
    if (checked == true) {
    $value = $("input[name='art_score']").prop('value')
    $("input[name='art_score']").prop('disabled', true);
   }
}

function verifyComputerDisabled() {
    $("input[name='computer_score']").prop('disabled', false);
    var checked = document.getElementById("computerChecked").checked;
    if (checked == true) {
    $value = $("input[name='computer_score']").prop('value')
    $("input[name='computer_score']").prop('disabled', true);
   }
}

function verifyMusicDisabled() {
    $("input[name='music_score']").prop('disabled', false);
    var checked = document.getElementById("musicChecked").checked;
    if (checked == true) {
    $value = $("input[name='music_score']").prop('value')
    $("input[name='music_score']").prop('disabled', true);
   }
}

function verifyPknDisabled() {
    $("input[name='pkn_score']").prop('disabled', false);
    var checked = document.getElementById("pknChecked").checked;
    if (checked == true) {
    $value = $("input[name='pkn_score']").prop('value')
    $("input[name='pkn_score']").prop('disabled', true);
   }
}

function verifyReligionDisabled() {
    $("input[name='religion_score']").prop('disabled', false);
    var checked = document.getElementById("religionChecked").checked;
    if (checked == true) {
    $value = $("input[name='religion_score']").prop('value')
    $("input[name='religion_score']").prop('disabled', true);
   }
}

function verifyPEDisabled() {
    $("input[name='PE_score']").prop('disabled', false);
    var checked = document.getElementById("PEChecked").checked;
    if (checked == true) {
    $value = $("input[name='PE_score']").prop('value')
    $("input[name='PE_score']").prop('disabled', true);
   }
}

// function loading(){
//     $(".loading").display = "flex";
//     $(".loading-text").display = "block";
//     $(".content").hide();
// }
