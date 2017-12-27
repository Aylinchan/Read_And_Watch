// Degiskenler tanimlaniyor
var mes_ = new Array;
var deg_= new Array;
var imgSayac;
//img kaynak adlari
var src_0 ="star.png";
var src_1 ="starfull.png";
// Diziler olusturuluyor

deg_[0]="1";

deg_[1]="2";

deg_[2]="3";

deg_[3]="4";

deg_[4]="5";

deg_[5]="6";
// AÃ…Å¸agidakiler boÃ…Å¸ kalacak....
deg_[6]="";


function cevir(e,iNum)
{
var ieMi = document.all;
var oy = document.getElementById('oyDurumu');
var mesajTasiyici = document.getElementById('mesaj');

 if (window.event) e = window.event; 
 var srcEl = e.srcElement? e.srcElement : e.target;
 
var x = document.getElementsByName(srcEl.name.toString());
 
for(pO=0;pO<x.length;pO++){x[pO].src=src_0}; // resimleri iÃƒÂ§i boÃ…Å¸ yap
for(pO=0;pO<iNum;pO++){x[pO].src=src_1;} // resimleri son ÃƒÂ¼zerinde kalÃ„Â±nan noktaya kadar doldur

						if(ieMi){mesajTasiyici.innerText=mes_[iNum]}else{mesajTasiyici.textContent=mes_[iNum]}
	oy.value=deg_[iNum];

	if(ieMi){mesajTasiyici.innerText=mes_[iNum]}else{mesajTasiyici.textContent=mes_[iNum]}

if(e.type=='click'){deg_[6]=deg_[iNum];mes_[6]=mes_[iNum];imgSayac=iNum};

			if(e.type=='mouseout')
			{
			if(ieMi){if(mes_[6]!=''){mesajTasiyici.innerText=mes_[6];oy.value=deg_[6];}else{mesajTasiyici.innerText=mes_[0];oy.value=deg_[0];}}else{if(mes_[6]!=''){mesajTasiyici.textContent=mes_[6];oy.value=deg_[6];}else{mesajTasiyici.textContent=mes_[0];oy.value=deg_[0];}}
				for(pO=0;pO<x.length;pO++){x[pO].src=src_0}; // resimleri iÃƒÂ§i boÃ…Å¸ yap
				for(pO=0;pO<imgSayac;pO++){x[pO].src=src_1;} // resimleri son ÃƒÂ¼zerinde kalÃ„Â±nan noktaya kadar doldur
			}
}