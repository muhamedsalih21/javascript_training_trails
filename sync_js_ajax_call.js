 $("#btnTranslate").click(function() {
                                
                                for(var loop=0;loop<$(".transcriptq").length;loop++){
                                        
                                        let urlg = "https://translation.googleapis.com/language/translate/v2?key=AIzaSyATsvJs9hBavOSIq6XcPMLMK2MZyYo1Qow";
                                        urlg += "&source=" + $("#ddlSource").val();
                                        urlg += "&target=" + $("#ddlTarget").val();
                                        urlg += "&q=" + escape($('.transcriptq')[loop].innerText);
                                          $.ajax({
                                                     type: "GET",
                                                     url: urlg,
                                                     async: false,
                                                     success: function(data) {
                                                                    $('.transcriptq')[loop].innerText=data["data"]["translations"][0]["translatedText"];
                                                            }
                                                        });
                                    //     $.get(url, function(data, status) {
                                    //         console.log(loop);
                                    //         //$('.transcriptq')[loop].innerText="asd";
                                    //   // $('.transcriptq')[loop].innerText=data["data"]["translations"][0]["translatedText"];
                                    //   //console.log($('.transcriptq')[loop].innerText);

                                    // });
                                }
                        });
