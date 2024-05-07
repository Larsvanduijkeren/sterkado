jQuery(document).ready(function($){

	$(".zoho-select").select2({
	});

	$("#form1").validate({
		rules: {
			Number : {
				required: true,
				step: 1
			},
			Currency : {
				required: true,
				number: true
			},
			Name_First: "required",
			Name_Last: "required",
			Email: {
				required: true,
				email: true
			},
			SingleLine: "required",
			Dropdown: "required",
			Dropdown1: "required",
		},
		messages: {
			Name_First: "Dit veld is vereist.",
			Name_Last: "Dit veld is vereist.",
			Number: {
				required: "Dit veld is vereist.",
				step: "Vul een geldig getal in."
			},
			Currency: {
				required: "Dit veld is vereist.",
				number: "Vul een geldig getal in."
			},
			Email: "Geef een geldig e-mailadres op.",
			SingleLine: "Dit veld is vereist.",
			Dropdown: "Dit veld is vereist.",
			Dropdown1: "Dit veld is vereist.",
		},
		submitHandler: function(form) {
		    // do other things for a valid form
		    form.submit();
		}
	});


	$("#vragenform").validate({
		rules: {
			Name_First: "required",
			Name_Last: "required",
			Email: {
				required: true,
				email: true
			},
			Number : {
				required: true,
				step: 1
			},
		},
		messages: {
			Name_First: "Dit veld is vereist.",
			Name_Last: "Dit veld is vereist.",
			Email: "Geef een geldig e-mailadres op.",
			Number: {
				required: "Dit veld is vereist.",
				step: "Vul een geldig getal in."
			}
		},
		submitHandler: function(form) {
		    // do other things for a valid form
		    form.submit();
		}
	});


	$("#kerstpakketten").validate({
		rules: {
			SingleLine: "required",
			Name_First: "required",
			Name_Last: "required",
			Email: {
				required: true,
				email: true
			},
			PhoneNumber_countrycode : {
				required: true,
				number: true
			},
			Number : {
				required: true,
				step: 1
			},
			Currency : {
				required: true,
				number: true
			},
		},
		messages: {
			Name_First: "Dit veld is vereist.",
			Name_Last: "Dit veld is vereist.",
			Number: {
				required: "Dit veld is vereist.",
				step: "Vul een geldig getal in."
			},
			Currency: {
				required: "Dit veld is vereist.",
				number: "Vul een geldig getal in."
			},
			Email: "Geef een geldig e-mailadres op.",
			SingleLine: "Dit veld is vereist.",
			PhoneNumber_countrycode: "Vul een geldig telefoonnummer in.",
		},
		submitHandler: function(form) {
		    // do other things for a valid form
		    form.submit();
		}
	});

	$("#algemeen").validate({
		rules: {
			Dropdown: "required",
			Dropdown1: "required",
			SingleLine: "required",
			Name_First: "required",
			Name_Last: "required",
			Email: {
				required: true,
				email: true
			},
			PhoneNumber_countrycode : {
				required: true,
				number: true
			},
			Number : {
				required: true,
				step: 1
			},
			Currency : {
				required: true,
				number: true
			},
		},
		messages: {
			Dropdown: "Dit veld is vereist.",
			Dropdown1: "Dit veld is vereist.",
			SingleLine: "Dit veld is vereist.",
			Name_First: "Dit veld is vereist.",
			Name_Last: "Dit veld is vereist.",
			Number: {
				required: "Dit veld is vereist.",
				step: "Vul een geldig getal in."
			},
			Currency: {
				required: "Dit veld is vereist.",
				number: "Vul een geldig getal in."
			},
			Email: "Geef een geldig e-mailadres op.",
			PhoneNumber_countrycode: "Vul een geldig telefoonnummer in.",
		},
		submitHandler: function(form) {
		    // do other things for a valid form
		    form.submit();
		}
	});

	$("#contactform").validate({
		rules: {
			Name_First: "required",
			Name_Last: "required",
			SingleLine: "required",
			Email: {
				required: true,
				email: true
			},
			PhoneNumber_countrycode : {
				required: true,
				number: true
			}
		},
		messages: {
			SingleLine: "Dit veld is vereist.",
			Name_First: "Dit veld is vereist.",
			Name_Last: "Dit veld is vereist.",
			Email: "Geef een geldig e-mailadres op.",
			PhoneNumber_countrycode: "Vul een geldig telefoonnummer in.",
		},
		submitHandler: function(form) {
		    // do other things for a valid form
		    form.submit();
		}
	});

	$("#faqveelgestelde").validate({
		rules: {
			Name_First: "required",
			Name_Last: "required",
			Email: {
				required: true,
				email: true
			},
			Number : {
				required: true,
				step: 1,
				maxlength: 12
			},
		},
		messages: {
			Name_First: "Dit veld is vereist.",
			Name_Last: "Dit veld is vereist.",
			Email: "Geef een geldig e-mailadres op.",
			Number: {
				required: "Dit veld is vereist.",
				step: "Vul een geldig getal in."
			},
		},
		submitHandler: function(form) {
		    // do other things for a valid form
		    form.submit();
		}
	});

	$("#keuzekado").validate({
		rules: {
			SingleLine: "required",
			Name_First: "required",
			Name_Last: "required",
			Email: {
				required: true,
				email: true
			},
			PhoneNumber_countrycode : {
				required: true,
				number: true
			},
			Number : {
				required: true,
				step: 1
			},
			Currency : {
				required: true,
				number: true
			},
			Dropdown: "required",
		},
		messages: {
			SingleLine: "Dit veld is vereist.",
			Name_First: "Dit veld is vereist.",
			Name_Last: "Dit veld is vereist.",
			Number: {
				required: "Dit veld is vereist.",
				step: "Vul een geldig getal in."
			},
			Currency: {
				required: "Dit veld is vereist.",
				number: "Vul een geldig getal in."
			},
			Email: "Geef een geldig e-mailadres op.",
			PhoneNumber_countrycode: "Vul een geldig telefoonnummer in.",
			Dropdown: "Dit veld is vereist.",
		},
		submitHandler: function(form) {
		    // do other things for a valid form
		    form.submit();
		}
	});


	$("#soliciteerform").validate({
		rules: {
			Name_First: "required",
			Name_Last: "required",
			Website: {
				required: true,
				url: true
			},
			Email: {
				required: true,
				email: true
			},
			PhoneNumber_countrycode : {
				required: true,
				number: true
			}
		},
		messages: {
			Website: "Dit veld is vereist.",
			Name_First: "Dit veld is vereist.",
			Name_Last: "Dit veld is vereist.",
			Email: "Geef een geldig e-mailadres op.",
			PhoneNumber_countrycode: "Vul een geldig telefoonnummer in.",
		},
		submitHandler: function(form) {
		    // do other things for a valid form
		    form.submit();
		}
	});
});