function autocomplete(inp, arr) {
	var currentFocus;
	inp.addEventListener("input", function(e) {
		var a, b, i, val = this.value;
		closeAllLists();
		if (!val) { return false;}
		currentFocus = -1;
		a = document.createElement("DIV");
		a.setAttribute("id", this.id + "autocomplete-list");
		a.setAttribute("class", "autocomplete-items");
		this.parentNode.appendChild(a);
		for (i = 0; i < arr.length; i++) {
			if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
				b = document.createElement("DIV");
				b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
				b.innerHTML += arr[i].substr(val.length);
				b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
				b.addEventListener("click", function(e) {
					inp.value = this.getElementsByTagName("input")[0].value;
					closeAllLists();
				});
				a.appendChild(b);
			}
		}
	});
	inp.addEventListener("keydown", function(e) {
		var x = document.getElementById(this.id + "autocomplete-list");
		if (x) x = x.getElementsByTagName("div");
		if (e.keyCode == 40) {
			currentFocus++;
			addActive(x);
		}
		else if (e.keyCode == 38) { 
			currentFocus--;
			addActive(x);
		}
		else if (e.keyCode == 13) {
			e.preventDefault();
			if (currentFocus > -1) {
				if (x) x[currentFocus].click();
			}
		}
	});
	function addActive(x) {
		if (!x) return false;
		removeActive(x);
		if (currentFocus >= x.length) currentFocus = 0;
		if (currentFocus < 0) currentFocus = (x.length - 1);
		x[currentFocus].classList.add("autocomplete-active");
	}
	function removeActive(x) {
		for (var i = 0; i < x.length; i++) {
			x[i].classList.remove("autocomplete-active");
		}
	}
	function closeAllLists(elmnt) {
		var x = document.getElementsByClassName("autocomplete-items");
		for (var i = 0; i < x.length; i++) {
			if (elmnt != x[i] && elmnt != inp) {
				x[i].parentNode.removeChild(x[i]);
			}
		}
	}
	document.addEventListener("click", function (e) {
		closeAllLists(e.target);
	});
}

/*An array containing list of stations:*/
var stations = ["Surat(ST)",
"Ahmedabad Junction(ADI)",
"Vadodara Junction(BRC)	",
"Navsari(NVS)",
"Rajkot Junction(RJT)	",
"Anand Junction(ANND)	",
"Vapi(VAPI)	",
"Nadiad Junction(ND)	",
"Bharuch Junction(BH)	",
"Valsad(BL)	",
"Palanpur Junction(PNU)	",
"Ankleshwar Junction(AKV)	",
"Jamnagar(JAM)	",
"Udhna Junction(UDN)	",
"Bilimora Junction(BIM)	",
"Gandhidham Junction(GIMB)	",
"Bhuj(BHUJ)	",
"Viramgam Junction(VG)	",
"Mehsana Junction(MSH)	",
"Dahod(DHD)	",
"Surendranagar Junction(SUNR)	",
"Samakhiali Junction(SIOB)	",
"Maninagar(MAN)	",
"Mahemdavad Kheda Road(MHD)	",
"Botad Junction(BTD)	",
"Dwarka(DWK)	",
"Kosamba Junction(KSB	",
"Miyagam Karjan Junction(MYG)	",
"Junagadh Junction(JND)	",
"Kim(KIM)	",
"Veraval Junction(VRL)	",
"Udvada(UVD)	",
"Umargam Road(UBR)	",
"Bhavnagar Terminus(BVC)	",
"Porbandar(PBR)	",
"Godhra Junction(GDA)	",
"Wankaner Junction(WKR)	",
"Hapa(HAPA)	",
"Sabarmati Bg(SBIB)	",
"Bhachau(BCOB)	",
"Chhayapuri(CYI)	",
"Khambhalia(KMBL)	",
"Unjha(UJA)	",
"Dhrangadhra Junction(DHG)	",
"Siddhpur(SID)	",
"Gondal(GDL)	",
"Than(THAN)	",
"Jetalsar Junction(JLR)	",
"Bhakti Nagar(BKNG)	",
"Bhildi Junction(BLDI)	",
"Keshod(KSD)	",
"Derol(DRL)	",
"Palej(PLJ)	",
"Adipur Junction(AI)	",
"Virpur(VRR)	",
"Maliya Miyana Junction(MALB)	",
"Amalsad(AML)	",
"Wansjaliya Junction(WSJ)	",
"Anjar(AJE)	",
"Chandlodiya(CLDY)	",
"Maliya Hatina(MLHA)	",
"Navagadh(NUD)	",
"Maroli(MRL)	",
"Disa(DISA)	",
"Halvad(HVD)	",
"Sabarmati Junction(SBT)	",
"Radhanpur(RDHP)	",
"Limkheda(LMK)	",
"Paddhari(PDH)	",
"Kanjari Boriyavi Junction(KBRV)	",
"Bhatiya(BHTA)	",
"Bhanvad(BNVD)	",
"Vishvamitri(VS)	",
"Barejadi Nandej(BJD)	",
"Vasad Junction(VDA)	",
"Santalpur(SNLR)	",
"Lalpur Jam(LPJ)	",
"Diyodar(DEOR)	",
"Ambli Road(ABD)	",
"Pardi(PAD)	",
"Kalol Junction(KLL)	",
"Nabipur(NIU)	",
"Panoli(PAO)	",
"Bhilad(BLD)	",
"Piplod(PPD)	",
"Samlaya Junction(SMLA)	",
"Chorvad Road(CVR)	",
"Sanand(SAU)	",
"Gandhinagar Capital(GNC)	",
"Sanjan(SJN)	",
"Adesar(AAR)	",
"Sant Road(SAT)	",
"Lakhtar(LTR)	",
"Jam Jodhpur(JDH)	",
"Mithapur(MTHP)	",
"Ranavav(RWO)	",
"Bhabhar(BAH)	",
"Chhapi(CHP)	",
"Sayan(SYN)	",
"Upleta(UA)	",
"Itola(ITA)	",
"Varahi(VRX)	",
"Khodiyar(KHDB)	",
"Lakadiya(LKZ)	",
"Padampur(PDF)	",
"Daladi(DL)	",
"Kukma(KEMA)	",
"Jakhvada(JKA)	",
"Gop Jam(GOP)	",
"Bhimasar(BMSB)	",
"Bordi9BIO)	",
"Muli Road(MOL)	",
"Paneli Moti(PLM)	",
"Anas(ANAS)	",
"Ratnal(RUT)	",
"Champaner Road(CPN)	",
"Gomta(GTT)	",
"Dhoraji(DJI)	",
"Chharodi(CE)	",
"Bhayavadar(BHY)	",
"Sakhpur(SKR)	",
"Badodar(BDDR)	",
"Piprala(PFL)	",
"Bajva(BJW)	",
"Chitrod(COE)	",
"Kharsaliya(KRSA)	",
"Balwa(WAB)	",
"Mangal Mahudi(MAM)	",
"Ranoli(RNO)	",
"Jagudan(JDN)	",
"Okha(OKHA)	",
"Somnath(SMNH)	",
"Dhola Junction(DLJ)	",
"Surendranagar Gate(SRGT)	",
"Sihor Junction(SOJN)	",
"Jorawarnagar(JVN)	",
"Vyara(VYA)	",
"Dhanera(DQN)	",
"Songadh(SGD)	",
"Savarkundla(SVKD)	",
"Liliya Mota(LMO)	",
"Limbdi(LM)	",
"Rajula Junction(RLA)	",
"Dhasa Junction(DAS)	",
"Sachin(SCH)	",
"Bhavanagar Para(BVP)	",
"Wadhwan City(WC)	",
"Bhestan(BHET)	",
"Jam Wanthali(WTJ)	",
"Bardoli(BIY)	",
"Dungri(DGI)	",
"Morbi(MVI)	",
"Ranpur(RUR)	",
"Patan(PTN)	",
"Chalthan(CHM)	",
"Kanalus Junction(KNLS)	",
"Sanosra(SOA)	",
"Vartej(VTJ)	",
"Ningala(NGA)	",
"Aliyavad(ALB)	",
"Ujalvav(UJ)	",
"Madhi(MID)	",
"Alampur(ALMR)	",
"Ancheli(ACL)	",
"Gandhi Smriti(GNST)	",
"Joravasan(JRS)	",
"Vedchha(VDH)	",
"Chuda(CDA)	",
"Lathidad(LTD)	",
"Bajud(BJUD)	",
"Khodiyar Mandir(KDMR)	",
"Kosad(KSE)	",
"Kundli(KDI)	",
"Geratpur(GER)	",
"Kamli(KMLI)	",
"Bhutakiya Bhimasar(BUBR)	",
"Timbarva(TBV)	",
"Nazarbag(NZG)	",
"Medra(MDRA)	",
"Kashipura(KSUA)	",
"Kathalal(KTAL)	",
"Sandhanidhar(SDHR)	",
"Sardargram(SDGM)	",
"Adas Road(ADD)	",
"Sinhan(SYQ)	",
"Kathana(KTNA)	",
"Chhansara(CASA)	",
"Vatva(VTA)	",
"Jhulasan(JUL)	",
"Vejalka(VJK)	",
"Selavi(SHLV)	",
"Vavera(VVV)	",
"Sonasan(SNSN)	",
"Kudsad(KDSD)	",
"Kapadvanj(KVNJ)	",
"Bilkha(BILK)	",
"Bakrol(BKRL)	",
"Chirai(CHIB)	",
"Vondh(VONB)	",
"Chhota Udepur(CTD)	",
"Dangarwa(DN)	",
"Chitrawad(CTRD)	",
"Vaghpura(VU)	",
"Dakor(DK)	",
"Gir Hadmatiya(GRHM)	",
"Vijapur(VJF)	",
"Chavaj(CVJ)	",
"Dhari Junction(DARI)	",
"Dabhoi Junction(DB)	",
"Vijpadi Road(VJD)	",
"Karjoda(KRJD)	",
"Sabli Road(SR)	",
"Jaksi(JKS)	",
"Piplee(PLE)	",
"Sarotra Road(SZA)	",
"Kaher(KRAI)	",
"Chandlodiya B(CLDB)	",
"Sasan Gir(SASG)	",
"Hapa Road(HPRD)	",
"Vavaniya(WWA)	",
"Satadhar(STDR)	",
"Damnagar(DME)	",
"Jaliya Devani(JALD)	",
"Bagumra(BGMR)	",
"Sankhari(SNHR)	",
"Katkola(KTLA)	",
"Visavadar Junction(VSW)	",
"Bodeli(BDE)	",
"Visnagar(VNG)	",
"Jambur(JBB)	",
"Rajpipla(RAJ)	",
"Dungar Junction(DGJ)	",
"Pudgam Ganeshpura(PDGP)	",
"Linch(LCH)	",
"Rajula City(RJU)	",
"Katosan Road(KTRD)	",
"Talod(TOD)	",
"Dhansura(DNUA)	",
"Bhadbhunja(BBAI)	",
"Dabhoda(DBO)	",
"Madhada(MDHA)	",
"Davol(DOW)	",
"Jamwala(JVL)	",
"Modpur(MDPR)	",
"Modasa(MDSA)	",
"Gothaj(GTE)	",
"Suskal(SSKL)	",
"Dugdol(DGQ)	",
"Od(OD)	",
"Sevaliya(SVL)	",
"Karamsad(KRYR)	",
"Petlad Junction(PTD)	",
"Jari(JARI)	",
"Pandori(PNDR)	",
"Tarapur Junction(TRP)	",
"Yawarpura(YVP)	",
"Bandhnath(BNTH)	",
"Sayama(SAY)	",
"Kalitalavdi(KLWD)	",
"Khambhat(CBY)	",
"Ramsan(RXN)	",
"Bileshwar(BLWR)	",
"Savni(SVB)	",
"Mahudha(MHUA)	",
"Rana Bordi(RNBD)	",
"Khari Amrapur(KIA)	",
"Sadanapura(SNA)	",
"Mota Jadra(MQZ)	",
"Lakodra Dethan(LKD)	",
"Lushala(LAL)	",
"Lakhamanchi(LMC)	",
"Umardashi(UM)	",
"Rajsitapur(RJC)	",
"Dharewada(DRW)	",
"Randala(RLD)	",
"Ambliyasan Junction(UMN)	",
"Delvada(DVA)	",
"Dosvada(DSD)	",
"Kidiyanagar(KYG)	",
"Wankaner City(WKRC)	",
"Gir Gadhara(GEG)	",
"Lunseriya(LXR)	",
"Shapur(SHH)	",
"Rafaleshwar(RF)	",
"Thasra(TAS)	",
"Talala Junction(TAV)	",
"Lakhpat(LAA)	",
"Timba Road(TBA)	",
"Palitana(PIT)	",
"Dahinsara Junction(DAC)	",
"Kansudhi(KIZ)	",
"Virochannagar(VCN)	",
"Jenal(JNZ)	",
"Tuwa(TUWA)	",
"Digsar(DXR)	",
"Detroj(DTJ)	",
"Amreli(AE)	",
"Jetalvad(JTV)	",
"Khanderi(KHDI)	",
"Vavadi Khurd(VKG)	",
"Amritvel(AVL)	",
"Panchtalavda Road(PCT)	",
"Lakhabawal(LKBL)	",
"Pipiliya Road(PPS)	",
"Ranuj Junction(RUJ)	",
"Tejgarh(TJH)	",
"Khakhrala Road(KKR)	",
"Motisadhli(MTSI)	",
"Dhuva(DV)	",
"Meriyana(MRYA)	",
"Vani Road(VNRD)	",
"Amreli Para(AEP)	",
"Varediya(VRE)	",
"Varnama(VRM)	",
"Gangadhara(GGAR)	",
"Varvala(VVA)	",
"Padaliya Road(PLRD)	",
"Vagdiya(VD)	",
"Ghatwad(GTWD)	",
"Anklav(ALV)	",
"Khorana(KHC)	",
"Chalala(CLC)	",
"Gadhakda(GKD)	",
"Sindhawadar(SDD)	",
"Torniya(TORA)	",
"Amalpur(AMLP)	",
"Jira Road(JIR)	",
"Kanakot(KNKT)	",
"Lorwada(LW)	",
"Marwar Ratanpur(MSQ)	",
"Gothangam(GTX)	",
"Utran(URN)	",
"Okha Madhi(OKD)	",
"Makarpura(MPR)	",
"Gunja(GUJ)	",
"Thuwavi(TWV)	",
"Lilapur Road(LPR)	",
"Jekot(JKT)	",
"Lotana(LAN)	",
"Hadmadiya(HRM)	",
"Bhatiel(BHAL)	",
"Jaliya Math(JLM)	",
"Bhader(BADR)	",
"Samni Junction(SAMN)	",
"Mahuva Junction(MHV)	",
"Hathuran(HAT)	",
"Chandisar(CDS)	",
"Vadhvana(VAN)	",
"Nandesari(NDR)	",
"Beyad(BAYD)	",
"Jabugam(JBU)	",
"Junichavand(JCN)	",
"Garmadi(GM)	",
"Shivlankha(SIA)	",
"Vadali Luter Road(VLTR)	",
"Meghpur Titodi(MGTD)	",
"Bochasan Junction(BCHN)	",
"Dhinoj(DHJ)	",
"Bagwada(BAGD)	",
"Pavi(PAVI)	",
"Rentia(RET)	",
"Jojwa(JJW)	",
"Prachi Road Junction(PCC)	",
"Isand(EN)	",
"Bhetasi(BETI)	",
"Kashipura Sarar(KSPR)	",
"Kanij(KANJ)	",
"Jashapar(JSPR)	",
"Bhankoda(BKD)	",
"Panchot(PHC)	",
"Hathigadh(HTGR)	",
"Bhatel(BHTL)	",
"Kansiya Nes(KANS)	",
"Adari Road(ADE)	",
"Jhagadiya Junction(JGI)	",
"Alindra Road(AIR)	",
"Avidha(AVH)	",
"Raj Pardi(RJD)	",
"Umalla(UML)	",
"Bhilpur(BILP)	",
"Juna Rajuvadiya(JRV)	",
"Supedi(SPD)	",
"Hadmatiya Junction(HM)	",
"Amletha(ALE)	",
"Nandol Dehegam(NHM)	",
"Chamaraj(CJR)	",
"Taropa(TRF)	",
"Kundhela(KDHL)	",
"Jethi(JTY)	",
"Puniyavant(PQT)	",
"Karambeli(KEB)	",
"Himmatnagar Junction(HMT)	",
"Kelanpur(KEP)	",
"Pratapnagar(PRTN)	",
"Gorinja(GRJA)	",
"Badhada(BDHA)	",
"Asarva Junction(ASV)	",
"Ukai Songadh(USD)	",
"Pansar(PN)	",
"Katuda(KTDA)	",
"Ingorala(IGRL)	",
"Sajanvav Road(SJF)	",
"Pipli(PPLI)	",
"Makansar(MU)	",
"Bhaner Minawada(BMVR)	",
"Kikakui Road(KKRD)	",
"Kherol(KOY)	",
"Umreth(UMH)	",
"Una(UNA)	",
"Jaliya(JA)	",
"Borsad(BO)	",
"Naroda(NRD)	",
"Amarsar(AXA)	",
"Ankleshwar Udyognagar(AKVU)	",
"Dadhal Inam(DHM)	",
"Bhimrana(BMRN)	",
"Boridra(BII)	",
"Chanchelav(CCL)	",
"Pilol(PIO)	",
"Gummandev(GME)	",
"Ramparda(RA)	",
"New Gumandev(NGMN)	",
"Adraj Moti(AJM)	",
"Chanol(CX)	",
"Ribada(RBR)	",
"Bhandu Motidau(BHU)	",
"Chitrasani(CTT)	",
"Chandkhera Road(CDK)	",
"Lakkad Kot(LKKD)	",
"Utarsanda(UTD)	",
"Prantij(PRJ)	",
"Kanad(KNAD)	",
"Choki Sorath(CKE)	",
"Bala Road(BLRD)	",
"Barwala Road(BRL)	",
"Vadal(VAL)	",
"Rakhiyal(RKH)	",
"Kodinar(KODR)	",
"Kothariya(RKY)	",
"Usra(USRA)	",
"Angadi(AGCI)	",
"Vadnagar(VDG)	",
"Vadod(VXD)	",
"Vadtal Swaminarayan(VTL)	",
"Bhalej(BAJ)	",
"Iqbal Gadh(IQG)	",
"Sahijpur(SAHP)	",
"Bhopalka(BPKA)	",
"Chhuchhapura Junction(CCP)	",
"Mangrolla(MGRL)",
"Nenpur(NEP)",
"Valadar(VLDR)",
"Sankheda Bahadurpur(SAK)",
]

autocomplete(document.getElementById("station_from"), stations);
autocomplete(document.getElementById("station_to"), stations);