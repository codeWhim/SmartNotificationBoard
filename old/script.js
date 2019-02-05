$(document).ready(function (e) {
                var selected = 1;
                // elem is the vertical div , i.e., undergrad/postgrad/doctorate
                // elm is the horizontal div , i.e., scholarship/timetable/exam schedule/exam results/ internship
                // selectb1/selectb2/selectb3 are the iterables for their corresponding vertical div
                // elem1 is the first horizontal div , i.e., scholarship
                
                /*the difference between elm and elem1 is that elm is used 
                when moving up and down in a specific vertical div, while 
                elem1 is used only if the vertical div is changed, elem1 
                always highlights the first horizontal div, i.e., scholarship
        

                */
                elem = "b1";
                elm = "c1";
                selectb1 = 1;
                $("body").keydown(function (e) {
                    if (e.keyCode == 37) { // left
                        if (selected != 1) {
                            selected--;
                            elem = "b" + selected;
                            if (elem == "b1"){
                                elem1 = "c1";
                                selectb1 = 1;
                                $('#' + elm).removeClass('active');
                                $('.btn').removeClass('active');
                            }
                            else if (elem == "b2"){
                                elem1 = "d1";
                                selectb2 = 1;
                                $('#' + elm).removeClass('active');
                                $('.btn').removeClass('active');
                            }
                            else if (elem == "b3"){
                                elem1 = "f1";
                                selectb3 = 1;
                                $('#' + elm).removeClass('active');
                                $('.btn').removeClass('active');
                            }
                            $('.col-md-4').removeClass('active');
                            $('#' + elem).addClass('active');

                            $('#' + elem1).addClass('active');
                        }
                    } 
                    else if (e.keyCode == 39) { // right
                        if (selected != 3) {
                            selected++;
                            elem = "b" + selected;
                            if (elem == "b1"){
                                elem1 = "c1";
                                selectb1 = 1;
                                $('.btn').removeClass('active');
                                $('#' + elm).removeClass('active');
                            }
                            else if (elem == "b2"){
                                elem1 = "d1";
                                selectb2 = 1;
                                $('.btn').removeClass('active');
                                $('#' + elm).removeClass('active');
                            }
                            else if (elem == "b3"){
                                elem1 = "f1";
                                selectb3 = 1;
                                $('.btn').removeClass('active');
                                $('#' + elm).removeClass('active');
                            }
                            $('.col-md-4').removeClass('active');
                            $('#' + elem).addClass('active');

                            $('#' + elem1).addClass('active');
                            
                        }
                    } 
                    else if (e.keyCode == 13) { // enter

                    }

                });

                $("body").keydown(function (e) {
                      if (e.keyCode == 38) { // up
                              if(elem == "b1" && selectb1 != 1){
                                  selectb1--;
                                  elm = "c" + selectb1;
                                  $('.btn').removeClass('active');
                                  $('#' + elm).addClass('active');
                                  }
                              else if(elem == "b2"  && selectb2 != 1){
                                  selectb2--;
                                  elm = "d" + selectb2;
                                  $('.btn').removeClass('active');
                                  $('#' + elm).addClass('active');
                                  }
                              else if(elem == "b3"  && selectb3 != 1){
                                  selectb3--;
                                  elm = "f" + selectb3;
                                  $('.btn').removeClass('active');
                                  $('#' + elm).addClass('active');
                                  }
                              } 
                    else if (e.keyCode == 40) { // down
                             if(elem == "b1" && selectb1 != 5){
                                  selectb1++;
                                  elm = "c" + selectb1;
                                  $('.btn').removeClass('active');
                                  $('#' + elm).addClass('active');
                                  }
                            else if(elem == "b2"  && selectb2 != 5){
                                  selectb2++;
                                  elm = "d" + selectb2;
                                  $('.btn').removeClass('active');
                                  $('#' + elm).addClass('active');
                                  }
                            else if(elem == "b3"  && selectb3 != 5){
                                  selectb3++;
                                  elm = "f" + selectb3;
                                  $('.btn').removeClass('active');
                                  $('#' + elm).addClass('active');
                                  }
                              //} else if (e.keyCode == 13) { // enter
                               // var href = $('.active').find('a').attr('href');
                                //  alert(href);

                              }
                          });
                      });
