//
//	jQuery Validate example script
//
//	Prepared by David Cochran
//
//	Free for your use -- No warranties, no guarantees!
//


$.validator.addMethod("loginRegex", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9]+$/i.test(value);
    }, "Username must contain only letters, numbers, or dashes.");
$(document).ready(function(){

	// Validate
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions

		$('#daftar-form').validate({
	    rules: {
	      
		  username: {
	        minlength: 5,
	        maxlength: 15,
			equalTo: "#users"
	      },
		 
		   
		  ticket: {
			equalTo: "#ticketx"
	      }
		
	    },
		
		
		
		 messages: {
                   
				    username: {
					   maxlength: "",
					   minlength: "",
					    equalTo: ""
                   },
				 
				  
				  
				   ticket: {
					    equalTo: ""
				  
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });
		
		
		
		$('#daftar-formv').validate({
	    rules: {
	      
		  serialcard: {
			equalTo: "#serialx"
	      },
		 
		   
		  pincard: {
			equalTo: "#pincardx"
	      }
		
	    },
		
		
		
		 messages: {
                   
				    serialcard: {
					    equalTo: ""
                   },
				 
				  
				  
				   pincard: {
					    equalTo: ""
				  
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });
		
		
		
		
		
		
		
		
			$('#order-form').validate({
	    rules: {
	       qty: {
	        required: true,
			number: true
	      },
		  name: {
	        maxlength: 40,
	        required: true
	      },
		   alamat: {
			 maxlength: 50,
	        required: true
	      },
	      phone: {
			maxlength: 20,
	      	number: true
	      },
		   
		   hp: {
			maxlength: 15,
	        required: true,
	        number: true
	      },
		 email: {
	        required: true,
	        email: true
	      },
		  kodev2: {
	        required: true
	      },
	     php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   qty: {
                       required: "Masukan jumlah pembelian.",    
					   number: "Masukan hanya angka saja."   
                   },
				   name: {
                       required: "Masukan nama Anda.",
					   maxlength: "Maksimal hanya 40 karakter"
                   },
                   alamat: {
                       required: "Masukan alamat Anda.",
					   maxlength: "Maksimal hanya 50 karakter"
                   },
				   phone: {
                       number: "Masukan hanya angka saja." ,
					   maxlength: "Maksimal hanya 20 karakter"
                   },
				    hp: {
                       required: "Masukan nomor hp Anda.",
					   number: "Masukan hanya angka saja." ,
					   maxlength: "Maksimal hanya 15 karakter"
                   },
                   email: {
                       required: "Masukan alamat email Anda." ,
					   email: "Masukan alamat email yang valid"
                   },
                  php_captcha: {
                       required: "Enter Security Code"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });	


		$('#profil-form').validate({
	    rules: {
	     
		  pin: {
	        required: true
	      },
		  firstname: {
	        maxlength: 40,
	        required: true
	      },
		   lastname: {
	        maxlength: 40,
	        required: true
	      },
		   alamat: {
			 maxlength: 80,
	        required: true
	      },
		   kota: {
	        required: true
	      },
		  phone: {
	        required: true
	      },
		   propinsi: {
	        required: true
	      },
		   negara: {
	        required: true
	      },
		  ktp: {
			 maxlength: 40, 
	        required: true
	      },
		  email: {
			   maxlength: 50,
	        required: true,
	        email: true
	      },
		   hp: {
			maxlength: 20,
	        required: true
	      },
		 bank: {
	        required: true
	      },
		  ben_name: {
	        required: true
	      },
		  negara: {
	        required: true
	      },
		  ben_country: {
	        required: true
	      },
		   bank_city: {
	        required: true
	      },
		   bank_acc: {
	        required: true
	      },
		   bank_branch: {
	        required: true
	      },
		   swift_code: {
	        required: true
	      },
		  iban: {
	        required: true
	      },
		   payid: {
	        required: true
	      },
		   paypalid: {
	        required: true
	      },
		   payzaid: {
	        required: true
	      },
		   egopayid: {
	        required: true
	      },
		   skrillid: {
	        required: true
	      },
		   fasapayid: {
	        required: true
	      },
		  
		   pfmoneyid: {
	        required: true
	      },
		   pfmoneyname: {
	        required: true
	      },
		   others: {
	        required: true
	      },
		  kodepos: {
	        required: true
	      },
		   pincode: {
	        required: true
	      },
		 php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   
				   firstname: {
                       required: "&nbsp;&nbsp;&nbsp;Eneter Firstname",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 40 character"
                   },
				   lastname: {
                       required: "&nbsp;&nbsp;&nbsp;Eneter Lastname",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 40 character"
                   },
				   alamat: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Address",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 150 character"
                   },
				   kota: {
                       required: "&nbsp;&nbsp;&nbsp;Enter City"
                   },
				   negara: {
                       required: "&nbsp;&nbsp;&nbsp;Select Country"
                   },
				   ktp: {
                       required: "&nbsp;&nbsp;&nbsp;Masukan No. Identitas/KTP",
					   maxlength: "&nbsp;&nbsp;&nbsp;Maksimal hanya 40 karakter"
                   },
				    propinsi: {
                       required: "&nbsp;&nbsp;&nbsp;Enter State"
                   },
				   desa: {
                       required: "&nbsp;&nbsp;&nbsp;Pilih Kelurahan"
                   },
				   email: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Email Address" ,
					   email: "&nbsp;&nbsp;&nbsp;Enter valid email address",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 50 character"
                   },
				   hp: {
                       required: "&nbsp;&nbsp;&nbsp;Enter mobile number",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 20 character"
                   },
				    bank: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Bank Name"
                   },
				   ben_name: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Beneficiary Name"
                   },
				    ben_country: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Beneficiary Country"
                   },
				    bank_city: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Beneficiary City"
                   },
				    bank_acc: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Account Number"
                   },
				   bank_branch: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Bank Address/Branch"
                   },
				    swift_code: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Swift Code"
                   },
				   iban: {
                       required: "&nbsp;&nbsp;&nbsp;Enter IBAN Code"
                   },
				   payid: {
                       required: "&nbsp;&nbsp;&nbsp;Select Request Payment Method"
                   },
				   paypalid: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Paypal ID"
                   },
				   payzaid: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Payza ID"
                   },
				   egopayid: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Egopay ID"
                   },
				   pfmoneyid: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Perfectmoney ID"
                   },
				   pfmoneyname: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Perfectmoney Name"
                   },
				   fasapayid: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Fasapay ID"
                   },
				   skrillid: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Skrill/Moneybookers ID"
                   },
				   others: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Other Request Payment"
                   },
				   
				   phone: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Phone"
                   },
				 kodepos: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Zip Code"
                   },
				   pemilik: {
                       required: "&nbsp;&nbsp;&nbsp;Masukan Nama Pemilik Rekening Bank"
                   },
				   pincode: {
                       required: "&nbsp;&nbsp;&nbsp;Enter PIN"
                   },
				   php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Security Code"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });



	$('#edittestimonial').validate({
	    rules: {
	     
		 nama: {
	        required: true,
			maxlength: 40
	      },
		  kota: {
	        required: true,
			maxlength: 40
	      },
		  email: {
			   maxlength: 50,
	        required: true,
	        email: true
	      },
		  hp: {
			maxlength: 15,
	        required: true,
	        number: true
	      },
		  judul: {
	        maxlength: 100,
	        required: true
	      },
		   testimoni: {
			 maxlength: 400,
	        required: true
	      },
		 kodev2: {
	        required: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   
				  nama: {
                       required: "&nbsp;&nbsp;&nbsp;Enter your name",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max only 40 character"
                   },
				   kota: {
                       required: "&nbsp;&nbsp;&nbsp;Enter your city",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max only 40 character"
                   },
				    email: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Email address" ,
					   email: "&nbsp;&nbsp;&nbsp;Enter valid email address",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max only 40 character"
                   },
				   hp: {
                       required: "&nbsp;&nbsp;&nbsp;Enter mobile number",
					   number: "&nbsp;&nbsp;&nbsp;Enter only number" ,
					   maxlength: "&nbsp;&nbsp;&nbsp;Max only 40 character"
                   },
				   judul: {
                       required: "&nbsp;&nbsp;&nbsp;Enter subject testimonial",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max only 100 character"
                   },
				    testimoni: {
                       required: "&nbsp;&nbsp;&nbsp;Enter testimonial.",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max only 400 character"
                   },
				   php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Security Code"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });



$('#addtestimonial').validate({
	    rules: {
	     
		   nama: {
	        required: true,
			maxlength: 40
	      },
		  kota: {
	        required: true,
			maxlength: 40
	      },
		  
		  email: {
			   maxlength: 50,
	        required: true,
	        email: true
	      },
		  hp: {
			maxlength: 15,
	        required: true,
	        number: true
	      },
		  judul: {
	        maxlength: 100,
	        required: true
	      },
		   testimoni: {
			 maxlength: 400,
	        required: true
	      },
		 kodev2: {
	        required: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   
				  nama: {
                       required: "&nbsp;&nbsp;&nbsp;Enter your name",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max only 40 character"
                   },
				    kota: {
                       required: "&nbsp;&nbsp;&nbsp;Enter your city",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max only 40 character"
                   },
				    email: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Email address" ,
					   email: "&nbsp;&nbsp;&nbsp;Enter valid email address",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max only 40 character"
                   },
				   hp: {
                       required: "&nbsp;&nbsp;&nbsp;Enter mobile number",
					   number: "&nbsp;&nbsp;&nbsp;Enter only number" ,
					   maxlength: "&nbsp;&nbsp;&nbsp;Max only 40 character"
                   },
				   judul: {
                       required: "&nbsp;&nbsp;&nbsp;Enter subject testimonial",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max only 100 character"
                   },
				    testimoni: {
                       required: "&nbsp;&nbsp;&nbsp;Enter testimonial.",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max only 400 character"
                   },
				   php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Security Code"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });




$('#myform_depo').validate({
	    rules: {
	     
		 produk: {
	        required: true
	      },
		 php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   
				  produk: {
                       required: "&nbsp;&nbsp;&nbsp;Select Package"
                   },
				   php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Security Code."
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#myform_cmp').validate({
	    rules: {
	     
		 jumlah: {
	        required: true
	      },
		   php_captcha: {  
	        required: true
	      }
	    },
		
		 messages: {
                   
				  jumlah: {
                       required: "Pilih Jumlah Compound"
                   },
				    php_captcha: {
                       required: "Masukan Security Code"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#editiklan').validate({
	    rules: {
	     
		  email: {
			   maxlength: 50,
	        required: true,
	        email: true
	      },
		nama: {  
			maxlength: 50,   
	        required: true
	      },
		   kota: {
			 maxlength: 50,
	        required: true
	      },
		website: {
			url: true
	      },
		  judul: {
			 maxlength: 80,
	        required: true
	      },
		  testimoni: {
			 maxlength: 350,
	        required: true
	      },
		  telp: {
			maxlength: 20,
	        number: true
	      },
		 kodev2: {
	        required: true
	      },
		   kodev: {
			maxlength: 10,   
	        required: true,
			equalTo: "#kodev2"
	      }
	    },
		
		 messages: {
                   nama: {
                       required: "&nbsp;&#10006;&nbsp;Masukan Nama.",
						maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 50 karakter"
                   },
				    email: {
                       required: "&nbsp;&#10006;&nbsp;Harap masukan alamat email Anda." ,
					   email: "&nbsp;&#10006;&nbsp;Masukan alamat email yang valid",
					   maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 50 karakter"
                   },
				  website: {
                       url: "&nbsp;&#10006;&nbsp;Masukan URL yang valid."
                   },
				   kota: {
                       required: "&nbsp;&#10006;&nbsp;Masukan kota Anda.",
					   maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 50 karakter"
                   },
				    judul: {
                       required: "&nbsp;&#10006;&nbsp;Masukan kota Anda.",
					   maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 80 karakter"
                   },
				    telp: {
					   number: "&nbsp;&#10006;&nbsp;Masukan hanya angka saja." ,
					   maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 20 karakter"
                   },
				    testimoni: {
                       required: "&nbsp;&#10006;&nbsp;Masukan kota Anda.",
					   maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 350 karakter"
                   },
				   kodev: {
                       required: "&nbsp;&#10006;&nbsp;Masukan security code.",
					    equalTo: "&nbsp;&#10006;&nbsp;Security Code salah !",
						maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 10 karakter"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#addiklan').validate({
	    rules: {
	     
		  email: {
			   maxlength: 50,
	        required: true,
	        email: true
	      },
		nama: {  
			maxlength: 50,   
	        required: true
	      },
		   kota: {
			 maxlength: 50,
	        required: true
	      },
		website: {
			url: true
	      },
		  judul: {
			 maxlength: 80,
	        required: true
	      },
		  testimoni: {
			 maxlength: 350,
	        required: true
	      },
		  telp: {
			maxlength: 20,
	        number: true
	      },
		 kodev2: {
	        required: true
	      },
		   kodev: {
			maxlength: 10,   
	        required: true,
			equalTo: "#kodev2"
	      }
	    },
		
		 messages: {
                   nama: {
                       required: "&nbsp;&#10006;&nbsp;Masukan Nama.",
						maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 50 karakter"
                   },
				    email: {
                       required: "&nbsp;&#10006;&nbsp;Harap masukan alamat email Anda." ,
					   email: "&nbsp;&#10006;&nbsp;Masukan alamat email yang valid",
					   maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 50 karakter"
                   },
				  website: {
                       url: "&nbsp;&#10006;&nbsp;Masukan URL yang valid."
                   },
				   kota: {
                       required: "&nbsp;&#10006;&nbsp;Masukan kota Anda.",
					   maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 50 karakter"
                   },
				    judul: {
                       required: "&nbsp;&#10006;&nbsp;Masukan kota Anda.",
					   maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 80 karakter"
                   },
				    telp: {
					   number: "&nbsp;&#10006;&nbsp;Masukan hanya angka saja." ,
					   maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 20 karakter"
                   },
				    testimoni: {
                       required: "&nbsp;&#10006;&nbsp;Masukan kota Anda.",
					   maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 350 karakter"
                   },
				   kodev: {
                       required: "&nbsp;&#10006;&nbsp;Masukan security code.",
					    equalTo: "&nbsp;&#10006;&nbsp;Security Code salah !",
						maxlength: "&nbsp;&#10006;&nbsp;Maksimal hanya 10 karakter"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#form1x').validate({
	    rules: {
	     
		 uploadfile: {
                required: true,
	      }
	    },
		
		 messages: {
                   
				  
				   uploadfile: {
                       required: "&nbsp;&#10006;&nbsp;Masukan gambar.",
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#form1_wd').validate({
	    rules: {
			
	     komisi: {
	        required: true
	      },
		   pincode: {
	        required: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                    
					
					komisi: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Withdrawal's Amount"
				  },
				   pincode: {
                       required: "&nbsp;&nbsp;&nbsp;Enter PIN"
				  },
				   php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Security Code."
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });


$('#database').validate({
	    rules: {
	     
		  user: {
	        required: true
	      },
		host: {  
	        required: true
	      },
		   pass: {
	        required: true
	      },
		dbase: {
	        required: true
	      },
		diradmin: {
	        required: true
	      },
		license: {
	        required: true
	      },
		  domain: {
	        required: true
		 
	      }
	    },
		
		 messages: {
                   user: {
                       required: "Masukan User Database"
                   },
				    host: {
                       required: "Masukan Host Database"
                   },
				  pass: {
                       url: "Masukan Password Database"
                   },
				   dbase: {
                       required: "Masukan Nama Database"
                   },
				   diradmin: {
                       required: "Masukan Nama Direktori Admin"
                   },
				   license: {
                       required: "Masukan Lisensi Script"
                   },
				    domain: {
                       required: "Masukan Nama Domain"
                   
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#member').validate({
	    rules: {
	     
		  user: {
	        required: true
	      },
		email: {
	        required: true,
	        email: true
	      },
		   pass: {
	        required: true
	      },
		nama: {
	        required: true
	     
	      }
	    },
		
		 messages: {
                   user: {
                       required: "Masukan Username Member Awal"
                   },
				  email: {
                       required: "Masukan Alamat Email Member Awal" ,
					   email: "Masukan Alamat Email Valid"
                   },
				  pass: {
                       url: "Masukan Password Login Member Awal"
                   },
				   nama: {
                       required: "Masukan Nama Member Awal"
                  
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#admin').validate({
	    rules: {
	     
		  user: {
	        required: true
	      },
		email: {
	        required: true,
	        email: true
	      },
		   pass: {
	        required: true
	      },
		nama: {
	        required: true
	     
	      }
	    },
		
		 messages: {
                   user: {
                       required: "Masukan Username Admin"
                   },
				  email: {
                       required: "Masukan Alamat Email Admin" ,
					   email: "Masukan Alamat Email Valid"
                   },
				  pass: {
                       url: "Masukan Password Login Admin"
                   },
				   nama: {
                       required: "Masukan Nama Admin"
                  
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#logform').validate({
	    rules: {
	     
		  userlogin: {
	        required: true
	      },
		passlogin: {
	        required: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   userlogin: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Username"
                   },
				  passlogin: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Password"
                   },
				  php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Captcha"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#logminform').validate({
	    rules: {
	     
		  username: {
	        required: true
	      },
		password: {
	        required: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   username: {
                       required: "Masukan Username"
                   },
				  password: {
                       required: "Masukan Password"
                   },
				  php_captcha: {
                       required: "Masukan Security Code"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#blockform').validate({
	    rules: {
	     
		  kode: {
	        required: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   kode: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Blocking Code"
                   },
				  php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Captcha"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });


$('#lostpassform').validate({
	    rules: {
	     
		  username: {
	        required: true
	      },
		  email: {
	        required: true,
	        email: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   username: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Username"
                   },
				    email: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Email Address" ,
					   email: "&nbsp;&nbsp;&nbsp;Enter Valid Email Address"
                   },
				  php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Captcha"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });


$('#lostpassadmin').validate({
	    rules: {
	     
		  username: {
	        required: true
	      },
		  email: {
	        required: true,
	        email: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   username: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Username"
                   },
				    email: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Email Address" ,
					   email: "&nbsp;&nbsp;&nbsp;Enter Valid Email Address"
                   },
				  php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Captcha"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });




$('#chpassform').validate({
	    rules: {
	     
		  password1: {
	        required: true
	      },
		   password2: {
	        required: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   password1: {
                       required: "&nbsp;&nbsp;&nbsp;Enter New Password"
                   },
				   password2: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Again New Password"
                   },
				   php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Captcha"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });


$('#gantipass-form').validate({
	    rules: {
	     
		  password1: {
	        required: true
	      },
		   password2: {
	        required: true
	      },
		   passwordx: {
	        required: true
	      },
		   pincode: {
	        required: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   password1: {
                       required: "&nbsp;&nbsp;&nbsp;Enter New Password"
                   },
				   password2: {
                       required: "&nbsp;&nbsp;&nbsp;Confirm New Password"
                   },
				   passwordx: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Old Password"
                   },
				   pincode: {
                       required: "&nbsp;&nbsp;&nbsp;Enter PIN"
                   },
				  php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Security Code"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#act_pin2').validate({
	    rules: {
	     
		  pin: {
	        required: true
	      },
		   pincode: {
	        required: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   pin: {
                       required: "&nbsp;&nbsp;&nbsp;Enter New PIN"
                   },
				   pincode: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Old PIN"
                   },
				  php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Security Code"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });
$('#act_pins').validate({
	    rules: {
	     
		  pinbaru: {
	        required: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   pinbaru: {
                       required: "&nbsp;&nbsp;&nbsp;Enter New PIN"
                   },
				  php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Security Code"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });


$('#form_confirm').validate({
	    rules: {
	     
		  
		jenis: {
	        required: true
	      },
		  email: {
			   maxlength: 60,
	        required: true,
	        email: true
	      },
		nama: {  
			maxlength: 50,   
	        required: true
	      },
		   nominal: {
	        required: true
	      },
		   hp: {
	        required: true
	      },
		  rekeningtujuan: {
	        required: true
	      },
		  tanggal: {
	        required: true
	      },
		  bankasal: {
	        required: true
	      },
		 
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                   jenis: {
                       required: "&nbsp;&nbsp;&nbsp;Select confirmation's type"
                   },
				   nama: {
                       required: "&nbsp;&nbsp;&nbsp;Enter name",
						maxlength: "&nbsp;&nbsp;&nbsp;Max 50 character"
                   },
				    email: {
                       required: "&nbsp;&nbsp;&nbsp;Enter email address" ,
					   email: "&nbsp;&nbsp;&nbsp;Enter valid email address",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 60 character"
                   },
				  nominal: {
                       required: "&nbsp;&nbsp;&nbsp;Enter amount transfer"
                   },
				   hp: {
                       required: "&nbsp;&nbsp;&nbsp;Enter mobile number"
                   },
				   rekeningtujuan: {
                       required: "&nbsp;&nbsp;&nbsp;Select payment destination"
                   },
				    tanggal: {
                       required: "&nbsp;&nbsp;&nbsp;Select date"
                   },
				    bankasal: {
					 required: "&nbsp;&nbsp;&nbsp;Enter your payment from"
                   },
				   
				   php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter security code."
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#contactus').validate({
	    rules: {
	     
		
		  email: {
			   maxlength: 60,
	        required: true,
	        email: true
	      },
		nama: {  
			maxlength: 50,   
	        required: true
	      },
		   alamat: {
	        required: true
	      },
		 
		  judul: {
	        required: true
	      },
		 isi: {
	        required: true
	      },
		   php_captcha: { 
	        required: true
	      }
	    },
		
		 messages: {
                  
				   nama: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Name",
						maxlength: "&nbsp;&nbsp;&nbsp;Max 50 character"
                   },
				    email: {
                       required: "&nbsp;&nbsp;&nbsp;Enter email address" ,
					   email: "&nbsp;&nbsp;&nbsp;Enter valid email address",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 60 character"
                   },
				  alamat: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Address"
                   },
				   judul: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Subject"
                   },
				    isi: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Your Message"
                   },
				    
				   php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Captcha"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });


$('#donlotku').validate({
	    rules: {
		
		 passd2: {
	        required: true
	      },
		   passdl: {
	        required: true,
			equalTo: "#passd2"
	      }
	    },
		
		 messages: {
                    
				
				   
				   passdl: {
                       required: "Masukan Kode Download",
					    equalTo: "Kode Download Salah"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });



$('#myform_cmp2').validate({
	    rules: {
	     
		  jumlah: {
	        required: true
	      }
	    },
		
		 messages: {
                   
				  jumlah: {
                       required: "Pilih Jumlah Compound"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#create_wallet').validate({
	    rules: {
			
	    
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                    
					
				
				   php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Security Code."
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#logwalet-form').validate({
	    rules: {
			
	    passewalet: {
	        required: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		 messages: {
                    
					
				 passewalet: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Password Ewallet"
                   },
				   php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Security Code."
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#min_pass_update').validate({
	    rules: {
	     
		  passwordx: {
	        required: true
	      },
		password1: {
	        required: true
	      },
		   password2: {
	        required: true
	      }
	    },
		
		 messages: {
                   passwordx: {
                       required: "Masukan Password Lama"
                   },
				  password1: {
                       required: "Masukan Password Baru"
                   },
				  password2: {
                       required: "Konfirmasi Password Baru"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#berita').validate({
	    rules: {
	     
		  judul: {
	        required: true
	      },
		testi: {
	        required: true
	      }
	    },
		
		 messages: {
                   judul: {
                       required: "&nbsp;&nbsp;&nbsp;Masukan Judul Berita"
                   },
				  testi: {
                       required: "&nbsp;&nbsp;&nbsp;Masukan Isi Berita"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#sendingmemo').validate({
	    rules: {
	     
		  user: {
	        required: true
	      },
		 judul: {
	        required: true
	      },
		isi: {
	        required: true
	      }
	    },
		
		 messages: {
			 user: {
                       required: "&nbsp;&nbsp;&nbsp;Enter username that you will send a memo"
                   },
                   judul: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Subject"
                   },
				  isi: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Message"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

$('#actform').validate({
	    rules: {
	     
		  mailcode: {
	        required: true
	      },
		   username: {
	        required: true
	      },
		 smscode: {
	        required: true
	      }
	    },
		
		 messages: {
			 mailcode: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Activation Code"
                   },
				    username: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Username"
                   },
                   smscode: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Activation Code"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });
$('#frcheck').validate({
	    rules: {
		 kodex: {
	        required: true
	      },
		   kode: {
	        required: true,
			equalTo: "#kodex"
	      }
	    },
		
		 messages: {
                    
					
				   kode: {
                       required: "&nbsp;&nbsp;&nbsp;Enter SMS Code.",
					    equalTo: "&nbsp;&nbsp;&nbsp;Wrong Code !"
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });




		$('#daftar-formx').validate({
	    rules: {
	       rpadmin: {
	        required: true
	      },
		  produk: {
	        required: true
	      },
		  username: {
	        minlength: 5,
	        maxlength: 30,
	        required: true,
			 loginRegex: true,
			equalTo: "#users"
	      },
		  alamat: {
	        maxlength: 100,
	        required: true
	      },
		  sponsore: {
	        maxlength: 100,
	        required: true
	      },
		   pincode: {
	        required: true
	      },
		  password1: {
			maxlength: 20,
	        required: true
	      },
		  pin: {
	        maxlength: 10,
	        required: true,
			loginRegex: true
	      },
		  firstname: {
	        maxlength: 50,
	        required: true
	      },
		 lastname: {
	        maxlength: 50,
	        required: true
	      },
		   kota: {
	        required: true
	      },
		   propinsi: {
	        required: true
	      },
		   kodepos: {
	        required: true
	      },
		  ticket: {
			maxlength: 15,
	        required: true,
			equalTo: "#ticketx"
	      },
		  ktp: {
	        required: true
	      },
		   payment: {
	        required: true
	      },
		  ahliwaris: {
	        required: true
	      },
		  hubungan: {
	        required: true
	      },
		  paypalid: {
	        required: true,
			email: true
	      },
		  email: {
			   maxlength: 50,
	        required: true,
	        email: true,
			equalTo: "#mailx"
	      },
		   hp: {
			maxlength: 15,
	        required: true,
	        number: true,
			equalTo: "#hpx"
	      },
		
		  bank_name: {
	        required: true
	      },
		  bank_country: {
	        required: true
	      },
		   bank_city: {
	        required: true
	      },
		   bank_number: {
	        required: true
	      },
		   bank_branch: {
	        required: true
	      },
		   
		  
		  negara: {
	        required: true
	      },
		   php_captcha: {
	        required: true
	      }
	    },
		
		
		
		 messages: {
                   rpadmin: {
                       required: "&nbsp;&nbsp;&nbsp;Masukan Nilai Investasi Anda"
                   },
				    username: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Username",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 30 character",
					   minlength: "&nbsp;&nbsp;&nbsp;Min 5 character",
					    loginRegex: "&nbsp;&nbsp;&nbsp;Contains only a-z, A-Z, 0-9",
					    equalTo: "&nbsp;"
                   },
				   alamat: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Address",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 100 character"
                   },
				    sponsore: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Sponsor",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 100 character"
                   },
				    produk: {
                       required: "&nbsp;&nbsp;&nbsp;Select Package"
                   },
				   payment: {
                       required: "&nbsp;&nbsp;&nbsp;Select Payment Method"
                   },
				   ktp: {
                       required: "&nbsp;&nbsp;&nbsp;Masukan No. KTP"
                   },
				   ahliwaris: {
                       required: "&nbsp;&nbsp;&nbsp;Masukan Nama Ahli Waris"
                   },
				   hubungan: {
                       required: "&nbsp;&nbsp;&nbsp;Masuka Hubungan Ahli Waris"
                   },
				   password1: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Password",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 20 character",
                   },
                    pin: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Your PIN",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 10 character",
					   loginRegex: "&nbsp;&nbsp;&nbsp;Contains only a-z, A-Z, 0-9"
                   }, 
				   pincode: {
                       required: "&nbsp;&nbsp;&nbsp;Enter PIN"
                   },
				   firstname: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Your Firstname",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 50 character"
                   },
				   lastname: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Your Lastname",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 50 character"
                   },
				    kota: {
                       required: "&nbsp;&nbsp;&nbsp;Enter City"
                   },
				   propinsi: {
                       required: "&nbsp;&nbsp;&nbsp;Enter State"
                   },
				    kodepos: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Zip Postal Code"
                   },
				    negara: {
                       required: "&nbsp;&nbsp;&nbsp;Select Country"
                   },
				   email: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Email Address" ,
					   email: "&nbsp;&nbsp;&nbsp;Enter Valid Email Address",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 50 character",
					    equalTo: "&nbsp;"
                   },
				   paypalid: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Paypal Email Address" ,
					   email: "&nbsp;&nbsp;&nbsp;Enter Valid Email Address"
                   },
				   ticket: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Ticket",
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 15 character",
					    equalTo: "&nbsp;"
                   },
				   hp: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Mobile Number",
					   number: "&nbsp;&nbsp;&nbsp;Number Only" ,
					   maxlength: "&nbsp;&nbsp;&nbsp;Max 15 character",
					    equalTo: "&nbsp;"
                   },
				   bank: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Bank Name"
                   },
				   bank_name: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Beneficiary Name"
                   },
				    bank_country: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Beneficiary Country"
                   },
				    bank_city: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Beneficiary City"
                   },
				    bank_number: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Account Number"
                   },
				   bank_branch: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Bank Address/Branch"
                   },
				    swift_code: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Swift Code"
                   },
				   sponsore: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Your Sponsor",
					    equalTo: "&nbsp;"
                   },
				   
				   pemilik: {
                       required: "&nbsp;&nbsp;&nbsp;Masukan Nama Pemilik Rekening."
                   },
				    php_captcha: {
                       required: "&nbsp;&nbsp;&nbsp;Enter Captcha"
				  
                   }
           },
		
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });













}); // end document.ready

