
function show_quiz_list(lid,page=0){
		
    console.log(lid); 
	$.ajax({
		url: base_url + "index.php/kynangsong/show_quiz_list1/"+lid+"/"+page,
        type: "POST",
		data: {},
        contentType: 'application/json',
		  	success: function(result){
			console.log(result);
			$('#quiz-list').empty();
            //$('#quiz-list').html(result);
			$('h3').removeClass('openheader');	
			$('#h3_'+lid).addClass('menuheader expandable openheader');
			var html="";
			html+='';
			for(i=0;i<result.list.length;i++){
			html+='<div class="col-md-3 col-sm-6 col-xs-12 quiz-item"><div class="item-cover col-md-12 col-sm-12 col-xs-12">';
			html+='<div class="quiz-item-img col-md-12">'; 
			
				end = result.list[i]['question'].indexOf('" frameborder');
				
				start = result.list[i]['question'].indexOf('embed/');
				chuoicon = result.list[i]['question'].substr( start+6, end-start-6);
				html+='<img src="https://img.youtube.com/vi/'+chuoicon.replace('" width="560" height="315','')+'/0.jpg">';
				
				
			html+='</div>';	
				
			html+='	<div class="quiz-item-title col-md-12">'; 
					start1 = result.list[i]['question'].indexOf('<br');
					end1 = result.list[i]['question'].length;
                    chuoicon1 = result.list[i]['question'].substr(start1,end1);
			html+='<span'	+chuoicon1.slice(0,50);
			html+='		</div>';
        	html+='<div class="quiz-item-level-hard text-center col-md-12"><br><i class="fas fa-star icon-left"></i> Kỹ năng sống </div>';
            html+=' <div class="col-text-lambai col-md-12 col-sm-12 col-xs-12">';
            html+='<button type="button" class="btn-lambai" onclick="xemchitiet('+result.list[i]['qid']+')">Xem</button></div>';
			
			
			html+='</div></div>';
			}
			
			console.log(html);
			$('#quiz-list').append(html);
			console.log(result.row);
			var p = "";
			if(result.row<=3){
				p+= '<div class="pagination">';
				for(i=0; i<result.row; i++){
					p+='<span class="';
					if(i==0)
						p+='curlink ';
					else
						p+='numlink pointer';
					p+='"  onclick ="show_qb_list('+lid+','+i+')">'+(i+1)+'</span>';
				}
				p+= '</div>';
			}
			else{
			
				p+= '<div class="pagination">';
					p+='<span class="';
					if(page==0)
						p+='curlink';
					else
						p+='numlink';
					p+='">1</span>';
					p+='<span class="';
					if(page==1)
						p+='curlink';
					else
						p+='numlink';	
					p+='">';
						p+='<a class="pointer" onclick = "show_qb_list('+lid+','+1+')" data-ci-pagination-page="2">2</a>';
					p+='</span>';
					p+='<span class="';
					if(page==2)
						p+='curlink';
					else
						p+='numlink';	
					p+='">';
						p+='<a class="pointer" onclick = "show_qb_list('+lid+','+2+')">3</a>';
					p+='</span>';
					
					p+='<span class="nextlink">';
						p+='<a class="pointer" onclick = "show_qb_list('+lid+','+(page+1)+')">Tiếp</a>';
					p+='</span>';
					p+='<span class="lastlink">';
						p+='<a class="pointer" onclick = "show_qb_list('+lid+','+(result.row-1)+')" >Trang cuối</a>';
					p+='</span>';
				p+='</div>';
			}
			
			
			$('#quiz-list').append(p);
			
			
			
			
			
			
			
            }
		});
		
		
		
		
}
function show_qb_list(lid,page){
	console.log(lid);
    console.log(page);
	$.ajax({
		url: base_url + "index.php/kynangsong/show_quiz_list1/"+lid+"/"+page,
        type: "POST",
		data: {},
        contentType: 'application/json',
		  	success: function(result){
			console.log(result);
			$('#quiz-list').empty();
            //$('#quiz-list').html(result);
			$('h3').removeClass('openheader');	
			$('#h3_'+lid).addClass('menuheader expandable openheader');
			var html="";
			html+='';
			for(i=0;i<result.list.length;i++){
			html+='<div class="col-md-3 col-sm-6 col-xs-12 quiz-item"><div class="item-cover col-md-12 col-sm-12 col-xs-12">';
			html+='<div class="quiz-item-img col-md-12">'; 
			
				end = result.list[i]['question'].indexOf('" frameborder');
				
				start = result.list[i]['question'].indexOf('embed/');
				chuoicon = result.list[i]['question'].substr( start+6, end-start-6);
				html+='<img src="https://img.youtube.com/vi/'+chuoicon.replace('" width="560" height="315','')+'/0.jpg">';
				
				
			html+='</div>';	
				
			html+='	<div class="quiz-item-title col-md-12">'; 
					start1 = result.list[i]['question'].indexOf('<br');
					end1 = result.list[i]['question'].length;
                    chuoicon1 = result.list[i]['question'].substr(start1,end1);
			html+='<span'	+chuoicon1.slice(0,50);
			html+='		</div>';
        	html+='<div class="quiz-item-level-hard text-center col-md-12"><br><i class="fas fa-star icon-left"></i> Kỹ năng sống </div>';
            html+=' <div class="col-text-lambai col-md-12 col-sm-12 col-xs-12">';
            html+='<button type="button" class="btn-lambai" onclick="xemchitiet('+result.list[i]['qid']+')">Xem</button></div>';
			
			
			html+='</div></div>';
			}
			
			console.log(html);
			$('#quiz-list').append(html);
			var p = "";
			if(page<3){
			
				p+= '<div class="pagination">';
					p+='<span class="';
					if(page==0)
						p+='curlink';
					else
						p+='numlink';
					p+='">1</span>';
					
					p+='<span class="';
					if(page==1)
						p+='curlink';
					else
						p+='numlink';	
					p+='">';
						p+='<a class="pointer" onclick = "show_qb_list('+lid+','+1+')">2</a>';
					p+='</span>';
					if(result.row>2){
					p+='<span class="';
					if(page==2)
						p+='curlink';
					else
						p+='numlink';	
					p+='">';
						p+='<a class="pointer" onclick = "show_qb_list('+lid+','+2+')" >3</a>';
					p+='</span>';
					
						p+='<span class="nextlink">';
							p+='<a class="pointer" onclick = "show_qb_list('+lid+','+(page+1)+')">Tiếp</a>';
						p+='</span>';
						p+='<span class="lastlink">';
							p+='<a class="pointer" onclick = "show_qb_list('+lid+','+(result.row-1)+')">Trang cuối</a>';
						p+='</span>';
					}
				p+='</div>';
			}
			else{
				p+= '<div class="pagination">';
					p+='<span class="firtslink">';
					p+='<a class="pointer" onclick = "show_qb_list('+lid+','+0+')" data-ci-pagination-page="1">Trang đầu</a>';
					p+='</span>';p+='<span class="numlink">';
					p+='<a class="pointer" onclick = "show_qb_list('+lid+','+(page-1)+')" data-ci-pagination-page="3">Trang trước</a>';
					p+='</span>';
					p+='<span class="curlink">';
						p+='<a class="pointer" onclick = "show_qb_list('+lid+','+page+')" data-ci-pagination-page="4">'+(page+1)+'</a>';
					p+='</span>';
					if(page<result.row-1){
						p+='<span class="numlink">';
							p+='<a class="pointer" onclick = "show_qb_list('+lid+','+(page+1)+')" data-ci-pagination-page="5">'+(page+2)+'</a>';
						p+='</span>';
					
						p+='<span class="nextlink">';
							p+='<a class="pointer" onclick = "show_qb_list('+lid+','+(page+1)+')" data-ci-pagination-page="2" rel="next">Tiếp</a>';
						p+='</span>';
						p+='<span class="lastlink">';
							p+='<a class="pointer" onclick = "show_qb_list('+lid+','+(result.row-1)+')" data-ci-pagination-page="13">Trang cuối</a>';
						p+='</span>';
					}
				p+='</div>';
			}
			
			$('#quiz-list').append(p);
			
			
			
			
			
			
			
            }
		});
		
 	
}