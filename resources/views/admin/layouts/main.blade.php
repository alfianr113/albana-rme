<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ $title }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../img/logo_albana.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["{{ asset('css/fonts.min.css') }}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/atlantis2.css') }}">
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>
</head>

<body>
    <div class="wrapper horizontal-layout-2">
        <div class="main-header" data-background-color="light-blue2">
            @include('admin.partials.navbar')
            @include('admin.partials.menu')
        </div>
        @yield('container')
        @include('admin.partials.footer')
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- jQuery Scrollbar -->
    <script src="{{ asset('js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <!-- Moment JS -->
    <script src="{{ asset('js/plugin/moment/moment.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('js/plugin/chart.js/chart.min.js') }}"></script>
    <!-- jQuery Sparkline -->
    <script src="{{ asset('js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Chart Circle -->
    <script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('js/plugin/datatables/datatables.min.js') }}"></script>
    <!-- Bootstrap Notify -->
    <script src="{{ asset('js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <!-- Bootstrap Toggle -->
    <script src="{{ asset('js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
    <!-- jQuery Vector Maps -->
    <script src="{{ asset('js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <!-- Google Maps Plugin -->
    <script src="{{ asset('js/plugin/gmaps/gmaps.js') }}"></script>
    <!-- Dropzone -->
    <script src="{{ asset('js/plugin/dropzone/dropzone.min.js') }}"></script>
    <!-- Fullcalendar -->
    <script src="{{ asset('js/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
    <!-- DateTimePicker -->
    <script src="{{ asset('js/plugin/datepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <!-- Bootstrap Tagsinput -->
    <script src="{{ asset('js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <!-- Bootstrap Wizard -->
    <script src="{{ asset('js/plugin/bootstrap-wizard/bootstrapwizard.js') }}"></script>
    <!-- jQuery Validation -->
    <script src="{{ asset('js/plugin/jquery.validate/jquery.validate.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('js/plugin/summernote/summernote-bs4.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('js/plugin/webfont/webfont.min.js') }}"></script>
    <!-- Sweet Alert -->
    <script src="{{ asset('js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('js/plugin/chart.js/chart.min.js') }}"></script>
    <!-- Chart Circle -->
    <script src="{{ asset('js/plugin/chart-circle/circles.min.js') }}"></script>
    <!-- Atlantis JS -->
    <script src="{{ asset('js/atlantis2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});

            $('#multi-filter-select').DataTable({
                "pageLength": 5,
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var select = $(
                                '<select class="form-control"><option value=""></option></select>'
                                )
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d +
                                '</option>')
                        });
                    });
                }
            });
            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });
            //var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
            $('#addRowButton').click(function() {
                $('#add-row').dataTable().fnAddData([
                    $("#addName").val(),
                    $("#addPosition").val(),
                    $("#addOffice").val(),
                    action
                ]);
                $('#addRowModal').modal('hide');

            });
        });
    </script>
    <script>
        //== Class definition
        var SweetAlert2Demo = function() {
    
            //== Demos
            var initDemos = function() {
                //== Sweetalert Demo 1
                $('#alert_demo_1').click(function(e) {
                    swal('Good job!', {
                        buttons: {        			
                            confirm: {
                                className : 'btn btn-success'
                            }
                        },
                    });
                });
    
                //== Sweetalert Demo 2
                $('#alert_demo_2').click(function(e) {
                    swal("Here's the title!", "...and here's the text!", {
                        buttons: {        			
                            confirm: {
                                className : 'btn btn-success'
                            }
                        },
                    });
                });
    
                //== Sweetalert Demo 3
                $('#alert_demo_3_1').click(function(e) {
                    swal("Good job!", "You clicked the button!", {
                        icon : "warning",
                        buttons: {        			
                            confirm: {
                                className : 'btn btn-warning'
                            }
                        },
                    });
                });
    
                $('#alert_demo_3_2').click(function(e) {
                    swal("Good job!", "You clicked the button!", {
                        icon : "error",
                        buttons: {        			
                            confirm: {
                                className : 'btn btn-danger'
                            }
                        },
                    });
                });
    
                $('#alert_demo_3_3').click(function(e) {
                    swal("Good job!", "You clicked the button!", {
                        icon : "success",
                        buttons: {        			
                            confirm: {
                                className : 'btn btn-success'
                            }
                        },
                    });
                });
    
                $('#alert_demo_3_4').click(function(e) {
                    swal("Good job!", "You clicked the button!", {
                        icon : "info",
                        buttons: {        			
                            confirm: {
                                className : 'btn btn-info'
                            }
                        },
                    });
                });
    
                //== Sweetalert Demo 4
                $('#alert_demo_4').click(function(e) {
                    swal({
                        title: "Good job!",
                        text: "You clicked the button!",
                        icon: "success",
                        buttons: {
                            confirm: {
                                text: "Confirm Me",
                                value: true,
                                visible: true,
                                className: "btn btn-success",
                                closeModal: true
                            }
                        }
                    });
                });
    
                $('#alert_demo_5').click(function(e){
                    swal({
                        title: 'Input Something',
                        html: '<br><input class="form-control" placeholder="Input Something" id="input-field">',
                        content: {
                            element: "input",
                            attributes: {
                                placeholder: "Input Something",
                                type: "text",
                                id: "input-field",
                                className: "form-control"
                            },
                        },
                        buttons: {
                            cancel: {
                                visible: true,
                                className: 'btn btn-danger'
                            },        			
                            confirm: {
                                className : 'btn btn-success'
                            }
                        },
                    }).then(
                    function() {
                        swal("", "You entered : " + $('#input-field').val(), "success");
                    }
                    );
                });
    
                $('#alert_demo_6').click(function(e) {
                    swal("This modal will disappear soon!", {
                        buttons: false,
                        timer: 3000,
                    });
                });
    
                $('#alert_demo_7').click(function(e) {
                    swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        buttons:{
                            confirm: {
                                text : 'Yes, delete it!',
                                className : 'btn btn-success'
                            },
                            cancel: {
                                visible: true,
                                className: 'btn btn-danger'
                            }
                        }
                    }).then((Delete) => {
                        if (Delete) {
                            swal({
                                title: 'Deleted!',
                                text: 'Your file has been deleted.',
                                type: 'success',
                                buttons : {
                                    confirm: {
                                        className : 'btn btn-success'
                                    }
                                }
                            });
                        } else {
                            swal.close();
                        }
                    });
                });
    
                $('#alert_demo_8').click(function(e) {
                    swal({
                        title: 'Yakin Hapus Pengguna ?',
                        text: "Anda tidak akan dapat mengembalikannya !",
                        type: 'warning',
                        buttons:{
                            cancel: {
                                visible: true,
                                text : 'Tidak, Batalkan !',
                                className: 'btn btn-danger'
                            },        			
                            confirm: {
                                text : 'Ya, Hapus Saja !',
                                className : 'btn btn-success'
                            }
                        }
                    }).then((willDelete) => {
                        if (willDelete) {
                            swal("Poof! Data Pengguna Berhasil Dihapus !", {
                                icon: "success",
                                buttons : {
                                    confirm : {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        } else {
                            swal("Data Pengguna Berhasil Diamankan !", {
                                buttons : {
                                    confirm : {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        }
                    });
                });
                $('#alert_demo_9').click(function(e) {
                    swal({
                        title: 'Yakin Hapus Penjamin ?',
                        text: "Anda tidak akan dapat mengembalikannya !",
                        type: 'warning',
                        buttons:{
                            cancel: {
                                visible: true,
                                text : 'Tidak, Batalkan !',
                                className: 'btn btn-danger'
                            },        			
                            confirm: {
                                text : 'Ya, Hapus Saja !',
                                className : 'btn btn-success'
                            }
                        }
                    }).then((willDelete) => {
                        if (willDelete) {
                            swal("Poof! Data Penjamin Berhasil Dihapus !", {
                                icon: "success",
                                buttons : {
                                    confirm : {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        } else {
                            swal("Data Penjamin Berhasil Diamankan !", {
                                buttons : {
                                    confirm : {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        }
                    });
                });

                $('#alert_demo_10').click(function(e) {
                    swal({
                        title: 'Yakin Hapus Poli ?',
                        text: "Anda tidak akan dapat mengembalikannya !",
                        type: 'warning',
                        buttons:{
                            cancel: {
                                visible: true,
                                text : 'Tidak, Batalkan !',
                                className: 'btn btn-danger'
                            },        			
                            confirm: {
                                text : 'Ya, Hapus Saja !',
                                className : 'btn btn-success'
                            }
                        }
                    }).then((willDelete) => {
                        if (willDelete) {
                            swal("Poof! Data Poli Berhasil Dihapus !", {
                                icon: "success",
                                buttons : {
                                    confirm : {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        } else {
                            swal("Data Poli Berhasil Diamankan !", {
                                buttons : {
                                    confirm : {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        }
                    });
                });

                $('#alert_demo_11').click(function(e) {
                    swal({
                        title: 'Yakin Hapus Nakes ?',
                        text: "Anda tidak akan dapat mengembalikannya !",
                        type: 'warning',
                        buttons:{
                            cancel: {
                                visible: true,
                                text : 'Tidak, Batalkan !',
                                className: 'btn btn-danger'
                            },        			
                            confirm: {
                                text : 'Ya, Hapus Saja !',
                                className : 'btn btn-success'
                            }
                        }
                    }).then((willDelete) => {
                        if (willDelete) {
                            swal("Poof! Data Nakes Berhasil Dihapus !", {
                                icon: "success",
                                buttons : {
                                    confirm : {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        } else {
                            swal("Data Nakes Berhasil Diamankan !", {
                                buttons : {
                                    confirm : {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        }
                    });
                });
    
            };
    
            return {
                //== Init
                init: function() {
                    initDemos();
                },
            };
        }();
    
        //== Class Initialization
        jQuery(document).ready(function() {
            SweetAlert2Demo.init();
        });
    </script>
    
    <script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#608BC1'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#FCC737'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

        Circles.create({
			id:'circles-4',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 25,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
    <script>
        // Data untuk grafik Pasien
        const ctxPenjualan = document.getElementById('chartPasien1').getContext('2d');
        const chartPenjualan = new Chart(ctxPenjualan, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Pasien Daftar",
                    data: [101, 54, 36, 25, 24, 37, 44, 32, 25, 26, 11, 10],
                    borderColor: "#1d7af3",
                    backgroundColor: "rgba(29, 122, 243, 0.2)",
                    borderWidth: 2,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Data untuk grafik Kunjungan
        const ctxKunjungan2 = document.getElementById('chartObat').getContext('2d');
        const chartKunjungan2 = new Chart(ctxKunjungan2, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Obat Masuk",
                    data: [249, 810, 485, 964, 216, 228, 543, 692, 352, 341, 594, 451],
                    backgroundColor: "#59d05d",
                    borderColor: "#45b34a",
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

		// Data untuk grafik Kunjungan
        const ctxKunjungan = document.getElementById('chartKunjungan').getContext('2d');
        const chartKunjungan = new Chart(ctxKunjungan, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Kunjungan Pasien",
                    data: [1532, 1723, 1890, 2501, 3210, 2102, 2432, 2512, 2723, 1821, 1921, 2001],
                    backgroundColor: "rgba(29, 122, 243, 0.2)",
                    borderColor: "#1d7af3",
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

		// Data untuk grafik Kunjungan
        const ctxKunjungan3 = document.getElementById('chartObatKeluar').getContext('2d');
        const chartKunjungan3 = new Chart(ctxKunjungan3, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Obat Keluar",
                    data: [300, 450, 500, 350, 400, 600, 700, 800, 750, 900, 850, 950],
                    backgroundColor: "#59d05d",
                    borderColor: "#45b34a",
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

		// Data untuk grafik Kunjungan
        const ctxKunjungan4 = document.getElementById('chartPendapatan').getContext('2d');
        const chartKunjungan4 = new Chart(ctxKunjungan4, {
            type: 'bar',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Pendapatan Rupiah",
                    data: [3250000, 4550000, 2155500, 9250000, 7750000, 9258000, 9258000, 8258000, 7258000, 8258000, 11235500, 10258000],
                    backgroundColor: "#59d05d",
                    borderColor: "#45b34a",
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
