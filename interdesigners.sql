--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: InscritoGeral; Type: TABLE; Schema: public; Owner: pgadmin; Tablespace: 
--

CREATE TABLE "InscritoGeral" (
    id integer NOT NULL,
    nome character varying(140),
    pacote character varying(140),
    rg character varying(140),
    cpf character varying(140),
    dob character varying(140),
    tiposanguineo character varying(140),
    necessecidades_especiais boolean,
    medicacao_controlada boolean,
    alergias boolean,
    restricoes_alimenticias boolean,
    email character varying(140),
    telefone character varying(140),
    facebook character varying(140),
    contatoemergencia character varying(140),
    telefoneemergencia character varying(140),
    cidadeestado character varying(140),
    instituicao_de_origem character varying(140),
    curso character varying(255),
    anotermo character varying(140),
    outrocongresso character varying(140),
    camiseta character varying(140),
    alimentacao boolean,
    tipo_comida character varying(140),
    tamanho_comida character varying(140),
    comprovante character varying(255),
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public."InscritoGeral" OWNER TO pgadmin;

--
-- Name: InscritoGeral_id_seq; Type: SEQUENCE; Schema: public; Owner: pgadmin
--

CREATE SEQUENCE "InscritoGeral_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."InscritoGeral_id_seq" OWNER TO pgadmin;

--
-- Name: InscritoGeral_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pgadmin
--

ALTER SEQUENCE "InscritoGeral_id_seq" OWNED BY "InscritoGeral".id;


--
-- Name: InscritoSimposio; Type: TABLE; Schema: public; Owner: pgadmin; Tablespace: 
--

CREATE TABLE "InscritoSimposio" (
    id integer NOT NULL,
    nome character varying(140),
    email character varying(140),
    cpf character varying(140),
    telefone character varying(140),
    instituicao_de_origem character varying(140),
    arquivo character varying(255),
    comprovante character varying(255),
    tematica character varying(140),
    titulo character varying(140),
    autor1 character varying(140),
    autor2 character varying(140),
    autor3 character varying(140),
    autor4 character varying(140),
    autor5 character varying(140),
    resumo character varying(1000),
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL,
    json_avaliacao text,
    autor6 character varying(140),
    decimal_nota numeric(5,2)
);


ALTER TABLE public."InscritoSimposio" OWNER TO pgadmin;

--
-- Name: InscritoSimposioGeral; Type: TABLE; Schema: public; Owner: pgadmin; Tablespace: 
--

CREATE TABLE "InscritoSimposioGeral" (
    id integer NOT NULL,
    nome character varying(140),
    rg character varying(140),
    cpf character varying(140),
    dob character varying(140),
    email character varying(140),
    telefone character varying(140),
    facebook character varying(140),
    contatoemergencia character varying(140),
    telefoneemergencia character varying(140),
    cidadeestado character varying(140),
    instituicao_de_origem character varying(140),
    curso character varying(255),
    anotermo character varying(140),
    outrocongresso character varying(140),
    comprovante character varying(255),
    artigo boolean,
    tituloartigo character varying(140),
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public."InscritoSimposioGeral" OWNER TO pgadmin;

--
-- Name: InscritoSimposioGeral_id_seq; Type: SEQUENCE; Schema: public; Owner: pgadmin
--

CREATE SEQUENCE "InscritoSimposioGeral_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."InscritoSimposioGeral_id_seq" OWNER TO pgadmin;

--
-- Name: InscritoSimposioGeral_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pgadmin
--

ALTER SEQUENCE "InscritoSimposioGeral_id_seq" OWNED BY "InscritoSimposioGeral".id;


--
-- Name: InscritoSimposio_id_seq; Type: SEQUENCE; Schema: public; Owner: pgadmin
--

CREATE SEQUENCE "InscritoSimposio_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."InscritoSimposio_id_seq" OWNER TO pgadmin;

--
-- Name: InscritoSimposio_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pgadmin
--

ALTER SEQUENCE "InscritoSimposio_id_seq" OWNED BY "InscritoSimposio".id;


--
-- Name: convidados; Type: TABLE; Schema: public; Owner: pgadmin; Tablespace: 
--

CREATE TABLE convidados (
    id integer NOT NULL,
    foto character varying(255),
    descricao character varying(500),
    nome character varying(140),
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public.convidados OWNER TO pgadmin;

--
-- Name: convidados_id_seq; Type: SEQUENCE; Schema: public; Owner: pgadmin
--

CREATE SEQUENCE convidados_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.convidados_id_seq OWNER TO pgadmin;

--
-- Name: convidados_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pgadmin
--

ALTER SEQUENCE convidados_id_seq OWNED BY convidados.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: pgadmin; Tablespace: 
--

CREATE TABLE migrations (
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO pgadmin;

--
-- Name: oficinas; Type: TABLE; Schema: public; Owner: pgadmin; Tablespace: 
--

CREATE TABLE oficinas (
    id integer NOT NULL,
    foto character varying(255),
    descricao character varying(500),
    nome character varying(140),
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public.oficinas OWNER TO pgadmin;

--
-- Name: oficinas_id_seq; Type: SEQUENCE; Schema: public; Owner: pgadmin
--

CREATE SEQUENCE oficinas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.oficinas_id_seq OWNER TO pgadmin;

--
-- Name: oficinas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pgadmin
--

ALTER SEQUENCE oficinas_id_seq OWNED BY oficinas.id;


--
-- Name: palestras; Type: TABLE; Schema: public; Owner: pgadmin; Tablespace: 
--

CREATE TABLE palestras (
    id integer NOT NULL,
    foto character varying(255),
    descricao character varying(500),
    nome character varying(140),
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public.palestras OWNER TO pgadmin;

--
-- Name: palestras_id_seq; Type: SEQUENCE; Schema: public; Owner: pgadmin
--

CREATE SEQUENCE palestras_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.palestras_id_seq OWNER TO pgadmin;

--
-- Name: palestras_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pgadmin
--

ALTER SEQUENCE palestras_id_seq OWNED BY palestras.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: pgadmin; Tablespace: 
--

CREATE TABLE password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public.password_resets OWNER TO pgadmin;

--
-- Name: users; Type: TABLE; Schema: public; Owner: pgadmin; Tablespace: 
--

CREATE TABLE users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(60) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public.users OWNER TO pgadmin;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: pgadmin
--

CREATE SEQUENCE users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO pgadmin;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: pgadmin
--

ALTER SEQUENCE users_id_seq OWNED BY users.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: pgadmin
--

ALTER TABLE ONLY "InscritoGeral" ALTER COLUMN id SET DEFAULT nextval('"InscritoGeral_id_seq"'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: pgadmin
--

ALTER TABLE ONLY "InscritoSimposio" ALTER COLUMN id SET DEFAULT nextval('"InscritoSimposio_id_seq"'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: pgadmin
--

ALTER TABLE ONLY "InscritoSimposioGeral" ALTER COLUMN id SET DEFAULT nextval('"InscritoSimposioGeral_id_seq"'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: pgadmin
--

ALTER TABLE ONLY convidados ALTER COLUMN id SET DEFAULT nextval('convidados_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: pgadmin
--

ALTER TABLE ONLY oficinas ALTER COLUMN id SET DEFAULT nextval('oficinas_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: pgadmin
--

ALTER TABLE ONLY palestras ALTER COLUMN id SET DEFAULT nextval('palestras_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: pgadmin
--

ALTER TABLE ONLY users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);


--
-- Data for Name: InscritoGeral; Type: TABLE DATA; Schema: public; Owner: pgadmin
--

COPY "InscritoGeral" (id, nome, pacote, rg, cpf, dob, tiposanguineo, necessecidades_especiais, medicacao_controlada, alergias, restricoes_alimenticias, email, telefone, facebook, contatoemergencia, telefoneemergencia, cidadeestado, instituicao_de_origem, curso, anotermo, outrocongresso, camiseta, alimentacao, tipo_comida, tamanho_comida, comprovante, created_at, updated_at) FROM stdin;
1	Karolina Bueno Schezar	Interdesigners - 1º Lote (R$65)	54.278.305-8	42804818810	01/10/1996	AB+	f	f	t	f	karolinabs@gmail.com	016991541818	https://www.facebook.com/karolina.schezar	Vilma Aparecida Bueno Schezar	02116991689855	\N	UNESP bauru	Design	1º	Não	M (feminina)	t	Com Carne	Pequeno (R$30)	\N	2015-09-08 17:33:24	2015-09-08 17:33:24
2	Nathalia Torres Mendes da Silva	Interdesigners - 1º Lote (R$65)	393165486	40875591817	14/08/1996	A+	f	f	f	f	nathiebabe@hotmail.com	11 99374 7755	https://www.facebook.com/nathalia.torres.7169	Luis Eduardo Mendes da Silva	11 99326 6167 ou 11 2382 8067	\N	UNESP Bauru	Design 	2° ano	não	M (feminina)	t	Vegetariano	Pequeno (R$30)	\N	2015-09-08 17:41:27	2015-09-08 17:41:27
3	Arthur Lima	Interdesigners - 1º Lote (R$65)	47771179	41761121820	12/12/1993	AB+	f	f	f	f	arthur.lima@outlook.com	11 9 52227250	facebook.com/arth.lima	Annanda		\N	UNIFIEO	Design Digital	2		M	t	Com Carne	Médio (R$35)	\N	2015-09-20 22:20:22	2015-09-20 22:20:22
4	Thiago Stefanin	Interdesigners - 1º Lote (R$65)	403966942	36350952812	12/01/1987	AB+	f	f	f	f	thiago_stefanin@hotmail.com	14 99818 0136	Thiago Stefanin	Mariana A Santos	14 99686 0277	\N	UNESP - DARG	Artes Visuais - Licenciatura	7	de desing não apenas artes	G	f	Vegetariano	Pequeno (R$30)	/uploads/12042144_10206349408871649_1549561514_n.jpg	2015-09-21 21:45:22	2015-09-21 21:45:22
5	EDUARDO ZMIEVSKI	Interdesigners - 1º Lote (R$65)	104960556	08611691903	23/11/1993	O-	f	f	f	f	zmievski.eduardo@gmail.com	+554195379592	https://www.facebook.com/eduardo.zmievski	Maria Aparecida dos Santos	41 98279232	\N	UFPR	Design Gráfico	2014	Somente R's e N's design	G	f	Com Carne	Médio (R$35)	/uploads/IMG_20150921_121635808.jpg	2015-09-22 11:09:02	2015-09-22 11:09:02
6	Fernanda Tottero	Interdesigners - 1º Lote (R$65)	42.794.338-3	410.768.728-75	18/12/1993	A-	f	f	f	f	fetottero@gmail.com	11962620168	https://www.facebook.com/fetottero	Lucineia Aparecida Tottero	11971454949	\N	Faculdade de Arquitetura e Urbanismo da USP	Design	6º semestre	N SP 2015	G (feminina)	f	Vegetariano	Pequeno (R$30)	/uploads/20150922_111406.jpg	2015-09-22 14:28:36	2015-09-22 14:28:36
7	Fernanda Tottero	Interdesigners - 1º Lote (R$65)	42.794.338-3	410.768.728-75	18/12/1993	A-	f	f	f	f	fetottero@gmail.com	11962620168	https://www.facebook.com/fetottero	Lucineia Aparecida Tottero	11971454949	\N	Faculdade de Arquitetura e Urbanismo da USP	Design	6º semestre	N SP 2015	G (feminina)	f	Vegetariano	Pequeno (R$30)	/uploads/20150922_111406.jpg	2015-09-22 14:28:51	2015-09-22 14:28:51
8	João Victor Otterço Ribeiro	Interdesigners - 1º Lote (R$65)	52825885-0	449.757.368-02	04/01/1996	AB+	f	f	f	f	ottercojoao@hotmail.com	014991141313	https://www.facebook.com/joaovictor.otterco	Sérgio Polastro Ribeiro		\N					P (feminina)	f	Vegetariano	Pequeno (R$30)	\N	2015-09-22 16:28:29	2015-09-22 16:28:29
9	Leonardo Antunes do Nascimento	Interdesigners - 1º Lote (R$65)	9.743.114-0	077.775.359-60	24/07/1996	AB+	f	f	f	f	Leonasci96@yahoo.com.br	4198997590	https://www.facebook.com/leo.antunes2	Ari Carneiro do Nacimento	4199752677	\N	UFPR ( Universidade Federal do Paraná)	Design - projeto de produto	1 ano	R design e N design	GG	t	Com Carne	Médio (R$35)	\N	2015-09-23 00:49:12	2015-09-23 00:49:12
10	Livia Milone	Interdesigners - 1º Lote (R$65)	48651074-8	41403625883	11/3/1992	O+	f	f	t	f	liviacm_lee@hotmail.com	12 99191 6625	Lívia Milone	André Milone	12 991743626	\N	Unesp	Design de Produto	5º	Não	P (feminina)	f	Com Carne	Pequeno (R$30)	/uploads/comprovanteinter.jpg	2015-09-23 13:32:36	2015-09-23 13:32:36
11	Tainá Rodrigues	Interdesigners - 1º Lote (R$65)	45733977-9	439884528-31	24/04/1997	O+	f	f	f	t	tainarodrigues240497@gmail.com	17991001591	https://www.facebook.com/taina.rodrigues.750	Ruperto 		\N	unesp	design	1° ano	não	P (feminina)	f	Vegetariano	Pequeno (R$30)	\N	2015-09-23 16:02:06	2015-09-23 16:02:06
12	Monica Alessandra Becker	Interdesigners - 1º Lote (R$65)	84960314	00976748932	28/01/1994	A+	f	f	f	f	ma-becker@hotmail.com	41 96422567	https://m.facebook.com/MonicaAlessandraBecker	Vania	41 99263983	\N	UTFPR	Bacharelado em Design	1° ano	N Design 2015	P (feminina)	t	Vegano	Pequeno (R$30)	/uploads/IMG_20150923_190524.jpg	2015-09-23 22:13:01	2015-09-23 22:13:01
13	Natália Bonotto Meciano	Interdesigners - 1º Lote (R$65)	109053643	04380707989	21/12/1993	A+	f	f	t	f	nmeciano@gmail.com	41 95254320	https://m.facebook.com/natalia.meciano?ref=bookmarks	Sueli Fátima Bonotto Meciano	41 96696329	\N	UFPR	Design de produto	4°		M	f	Vegetariano	Pequeno (R$30)	/uploads/IMG_20150923_193356318.jpg	2015-09-23 22:40:10	2015-09-23 22:40:10
14	João Ricardo Pessutti	Interdesigners - 2º Lote (R$75)	42403689-7	454936158-19	04/04/1995	B-	f	f	f	f	joaopessutti@outolook.com	14 991395555		Ivana ou Paulo (pais)	14 36216493	\N	UNESP	Design	1/1	Nope	GG	f	Vegetariano	Pequeno (R$30)	/uploads/fruitloops-441535.jpeg	2015-09-23 22:52:36	2015-09-23 22:52:36
15	Davi Masayuki Hosogiri	Interdesigners - 1º Lote (R$65)	45.866.154-5	370.077.968-26	07/09/1993	B+	f	f	f	f	hosogiri.davi@gmail.com	(11) 971 028 280	fb.com/davimh	Mariana Ayumi Hosogiri	(11) 960 841 216	São Paulo - SP	FAUUSP	Design	3º ano (6º semestre)	Não	G	f	Vegetariano	Pequeno (R$30)	/uploads/comprovante_pagamento_interdesigners.jpg	2015-09-24 02:12:40	2015-09-24 02:12:40
16		Interdesigners - 1º Lote (R$65)				AB+	f	f	f	f											P (feminina)	f	Vegetariano	Pequeno (R$30)	\N	2015-09-24 16:00:27	2015-09-24 16:00:27
17	Maria Gabriela Basile	Interdesigners - 2º Lote (R$75)	48.306.730-1	353.735.488-63	15/01/1991	A+	f	f	f	f	gabi.iz@hotmail.com	(16) 9 96259197	https://www.facebook.com/mariagabriela.basile	Elisabete de Souza Basile	(16) 9 99629755	Ribeirão Preto- SP	UNESP	Design de Produto	4º ano	Sim, P&D.	G (feminina)	f	Vegetariano	Pequeno (R$30)	/uploads/Comprovante.jpeg	2015-09-26 18:07:39	2015-09-26 18:07:39
18	Marcel Barcelos Nogueira Barboza	Interdesigners - 2º Lote (R$75)	40.329.346-7	421096618-52	18/11/1992	O+	f	f	f	f	marcel_barboza@hotmail.com	(19) 98933-0990	facebook.com/o.marcel.barboza	Juliane (mãe)	(19) 3433-4858	Piracicaba - SP	UNESP	Design Gráfico	Entrei em 2011, devo estar no quinto ano.	NDesign	M	f	Com Carne	Pequeno (R$30)	/uploads/Marcel_Pagamento_Interdesigners.jpg	2015-09-28 21:19:43	2015-09-28 21:19:43
19	Marina Jardim Tarozzo	Interdesigners - 2º Lote (R$75)	45845630-5	38899605882	27/01/1995	B+	f	f	t	f	marinajtarozzo@gmail.com	016 982181995	Marina Tarozzo			Ribeirão Preto, São Paulo	UNESP BAURU	Design de Produto	quarto ano/ sétimo período		M (feminina)	f	Vegetariano	Pequeno (R$30)	\N	2015-09-29 16:24:17	2015-09-29 16:24:17
20	Beatriz Rizental MAchado	Interdesigners - 2º Lote (R$75)	8.548.606-3	087.765.279-13	25/05/1995	B+	f	f	f	f	beatriz.rizental@gmail.com	+55 11 941242505	https://www.facebook.com/biamx2505	Jacqueline Rizental Machado	+55 41 84376161	São Paulo, SP	USP	Design	6º Semestre	Sim, Purungo 2013, Interdesigners 2013, AGI Open 2014, R Sul 2014, R Erupção 2015, N Design 2015	G (feminina)	t	Com Carne	Pequeno (R$30)	/uploads/IMG_1535.PNG	2015-09-29 18:03:47	2015-09-29 18:03:47
21	GEORGE LUÍS AMORIM MATOS	Interdesigners - 1º Lote (R$65)	96449208	088.826.199-31	13/03/1992	AB+	f	t	f	t	georjaum@hotmail.com	44 98595139	georjaum@hotmail								P (feminina)	f	Vegetariano	Pequeno (R$30)	\N	2015-10-04 21:49:55	2015-10-04 21:49:55
22	GEORGE LUÍS AMORIM MATOS	Interdesigners - 1º Lote (R$65)	96449208	088.826.199-31	13/03/1992	AB+	f	t	f	t	georjaum@hotmail.com	44 98595139	georjaum@hotmailcom	Selma abreu amorim	4499462508	Cianorte Pr	UEM	Design de produto	2012/2015	Rmisto, N Design	G	t	Com Carne	Médio (R$35)	\N	2015-10-04 21:52:15	2015-10-04 21:52:15
23	Mariana Salera Marangoni	Interdesigners - 2º Lote (R$75)	40333285-0	419247338-03	12/12/1992	A+	f	f	f	f	marangoni.mariana@gmail.com	(14)981132728	https://www.facebook.com/ma.marangoni	Raul Alves	(14)982169575	Bauru - SP	UNESP 	Design Gráfico Diurno	4º ano - 8º termo 	Não.	M (feminina)	f	Vegetariano	Pequeno (R$30)	/uploads/recibo inter.jpg	2015-10-08 22:37:59	2015-10-08 22:37:59
24	Davi dos Santos Andrade	Interdesigners - 1º Lote (R$65)	414627519	37538937811	22/07/1988	O+	f	f	f	f	delonius@gmail.com										P (feminina)	f	Vegetariano	Pequeno (R$30)	\N	2015-10-09 17:36:48	2015-10-09 17:36:48
25	Isabela Ribeiro	Interdesigners - 2º Lote (R$75)	40157966-9	418657478-23	28/01/1993	B+	f	f	f	f	isaaa_ribeiro@hotmail.com	14 99680-7535	Isabela Ribeiro	Adriane Nogueira Faria	14 99710-8019	Bauru - SP	USC Universidade do Sagrado Coração	Design	2015	não	M (feminina)	f	Vegetariano	Pequeno (R$30)	/uploads/IMG_20151009_211930046.jpg	2015-10-10 00:30:29	2015-10-10 00:30:29
26	Reinaldo José Cavalheiro Filho	Interdesigners - 2º Lote (R$75)	48704792	425379798-93	24/10/1991	A+	f	f	f	f	recavalheiro@hotmail.com	14 99838-4949		Isabela Ribeiro	14 996807535	Bauru - SP	USC Universidade do Sagrado Coração	Design	2016	Não	G	f	Vegetariano	Pequeno (R$30)	/uploads/IMG_20151009_211947989.jpg	2015-10-10 00:35:26	2015-10-10 00:35:26
27	Daniela Nobrega de Souza	Interdesigners - 2º Lote (R$75)	4846236800	41898584800	20/11/1991	O+	f	f	f	f	danielanobregadesouza@gmail.com	12981295939	https://www.facebook.com/dani.dns	Joelma	12981151955	Jacareí/SP	UNESP	Design Gráfico	2011/9º	Sim, NDesign 2012, 2013 e todos os Interdesigners desde 2011	P (feminina)	f	Com Carne	Pequeno (R$30)	/uploads/IMG_20151010_132423642.jpg	2015-10-10 16:34:07	2015-10-10 16:34:07
28	CAIO HENRIQUE KAZEKER DE PAULA	Interdesigners - 2º Lote (R$75)	8956562-6	07846406965	07/04/1995	A+	f	f	f	f	caiokazeker@gmail.com	4196574547	https://www.facebook.com/caiokazeker	Leomara Aparecida Kazeker de Paula	41 9941-7829	Curitiba Paraná	UFPR	Design de Produto	3 ano	Rsul, Rerupção, Nsp	M	f	Vegetariano	Pequeno (R$30)	/uploads/img026.jpg	2015-10-15 00:14:55	2015-10-15 00:14:55
29	Livia Boer de Oliveira	Interdesigners - 1º Lote (R$65)	378503224	43112989864	15/05/1995	A+	f	f	f	f	boer.livia@gmail.com	(16)997905044	Livia Boer	Wania Boer	(16) 981135044	Curitiba, PR	Universidade Federal do Paraná	Design de Produto	Terceiro	Sim, NSP, RSUL2014, RErupção, Purungo Casa 2013	P (feminina)	f	Vegetariano	Pequeno (R$30)	\N	2015-10-16 14:28:12	2015-10-16 14:28:12
30	Matheus Guilherme Prudente	Interdesigners - 1º Lote (R$65)	496979826	42121644857	02/12/1994	O-	f	f	f	f	mattguilherme_@hotmail.com	(14)99702-5500	www.facebook.com/mattoumorra	Christiane Michele Lopes Coelho	(14)32040108	Bauru, São Paulo	Universidade do Sagrado Coração	Design	Terceiro ano	DESARQ (ufu)	M	f	Vegetariano	Pequeno (R$30)	\N	2015-10-19 15:37:17	2015-10-19 15:37:17
31	Matheus Guilherme Prudente	Interdesigners - 1º Lote (R$65)	496979826	42121644857	02/12/1994	O-	f	f	f	f	mattguilherme_@hotmail.com	(14)99702-5500	www.facebook.com/mattoumorra	Christiane Michele Lopes Coelho	(14)32040108	Bauru, São Paulo	Universidade do Sagrado Coração	Design	Terceiro ano	DESARQ (ufu)	M	f	Vegetariano	Pequeno (R$30)	\N	2015-10-19 15:37:50	2015-10-19 15:37:50
32	Roberto Thomazi Rodrigues	Interdesigners - 2º Lote (R$75)	590571072	02900680107	31/05/1993	O+	f	f	t	f	r.taman@hotmail.com	11985378227	https://www.facebook.com/roberto.thomazi.9	Adriana	1136286102	SAO PAULO SP	Unesp Bauru	Design/Not.	Quarto Ano	Nao	G	f	Vegetariano	Pequeno (R$30)	/uploads/INSCRIÇÃO INTERDESIGNERS.pdf	2015-10-20 01:31:13	2015-10-20 01:31:13
33	Micael Camargo Amâncio	Interdesigners - 2º Lote (R$75)	49419596-4	419030348-84	18/08/1993	B+	f	f	f	f	amancio.micael@gmail.com	11 954407738	https://www.facebook.com/micael.amancio.7	Ezequiel ou Simone	11 3735 2033 / 11 998516849	São Paulo / SP	USP	Arquitetura e Urbanismo	4º	Sim, NDesign	M	t	Com Carne	Médio (R$35)	/uploads/12165710_10203861749702434_1558105175_n.jpg	2015-10-20 02:13:12	2015-10-20 02:13:12
34	Marília Salomão Tiritan	Interdesigners - 2º Lote (R$75)	50216484-0	410850588-32	09/12/1992	B+	f	t	t	f	ma.tiritan@gmail.com	(19) 991452119	https://www.facebook.com/ma.tiritan	Sílvia Salomão	(19) 992031749 ou (19) 32437675	Campinas - SP	UNESP Bauru	Design Gráfico	2o ano	R Misto	G (feminina)	f	Vegano	Pequeno (R$30)	/uploads/ComprovanteBB - 2015-10-20-220635.pdf	2015-10-21 00:10:24	2015-10-21 00:10:24
35	Henrique Catalani 	Interdesigners - 2º Lote (R$75)	29777007-X	359245748-90	16/05/1992	AB+	f	f	f	f	rikecatalani@gmail.com	+44 7983481657	Henrique Catalani	Jovina (Mãe)	011 29570089	São Paulo	UNESP	Design Gráfico	4	Sim.	P	t	Com Carne	Pequeno (R$30)	/uploads/12179272_10153257284768995_652835661_n.jpg	2015-10-21 01:13:24	2015-10-21 01:13:24
36	Natália Leão Pellegrino ferreira	Interdesigners - 3º Lote (R$85)	508290965	40762311800	13/12/1995	AB+	f	f	f	f	natalialpferreira@outlook.com	17 992017209	https://www.facebook.com/Nah.L.Ferreira	Miriam Leão 	17 997374813	Catanduva - Sp	União das Faculdades dos Grandes Lagos 	Design Gráfico			P (feminina)	f	Vegetariano	Pequeno (R$30)	\N	2015-10-22 12:00:04	2015-10-22 12:00:04
37	Carolina Vaitiekunas Pizarro	Interdesigners - 2º Lote (R$75)	33.807.905-1	306.334.768-03	27/10/1982	O+	f	f	f	f	caroldipp@gmail.com	1438790450	https://www.facebook.com/Caroldipp			Bauru					P (feminina)	f	Vegetariano	Pequeno (R$30)	\N	2015-10-22 23:25:50	2015-10-22 23:25:50
38	Carolina Vaitiekunas Pizarro	Interdesigners - 2º Lote + Desconto Simpósio (R$70)	33.807.905-1	306.334.768-03	27/10/1982	O+	f	f	f	f	caroldipp@gmail.com	1438790450	https://www.facebook.com/Caroldipp			Bauru	UNESP Bauru	Doutorado em Design	1º ano	IDEMi, SPPG Design, SIDAU	P (feminina)	f	Vegetariano	Pequeno (R$30)	/uploads/comprov_Interdesigners 2015_Carolina Pizarro.jpg	2015-10-22 23:31:12	2015-10-22 23:31:12
39	Bradley	Interdesigners - 1º Lote (R$65)	bpaUZRTJyqx	pALHChnnSG	10121985	AB+	t	f	f	f	lucas2d44@gmail.com	58150050069	jLfohRuXhdt	jxmMR6 http://www.FyLitCl7Pf7kjQdDUOLQOuaxTXbj5iNG.com	42106474488	5098	YXAymlcAVNDIj	aZWGVWVP	WrxnzGJTnFSC	zjGAsXkPzhKgQ	P (feminina)	f	Vegetariano	Pequeno (R$30)	\N	2015-10-23 01:50:57	2015-10-23 01:50:57
40	Gabriel de Moura Leite	Interdesigners - 3º Lote (R$85)	12.636.271-4	063.704.839-31	25/01/1996	A+	f	f	f	f	gmoura95@gmail.com	(41) 9231 8555	Gabriel Moura Leite	Magali Aparecida Moraes de Moura Leite	(41) 9115 9595	Campo Largo - Paraná	Universidade Federal do Paraná	Design de Produto	2° Ano (4° período)	Sim, estive presente nos Rs Sul e Erupção e no NDesign em São Paulo este ano.	G	f	Vegetariano	Pequeno (R$30)	/uploads/IMG_2267.JPG	2015-10-29 23:56:36	2015-10-29 23:56:36
41	Matheus Nunes Machado	Interdesigners - 2º Lote (R$75)	47.083.229-0	468.573.928-03	12/05/1997	O+	f	f	f	f	matheusmac2814@gmail.com	(14)991407015	Matheus Nunes Machado	Gilmara Luzia Nunes Machado	(14)38413842	São Manuel São Paulo	Unesp	Design	Primeiro ano		P	f	Vegetariano	Pequeno (R$30)	\N	2015-10-30 02:23:40	2015-10-30 02:23:40
42	Horrana Porfirio Soares	Interdesigners - 2º Lote (R$75)	48.732.309-9	402.627.058-00	14/03/1995	B+	f	f	t	f	hon.porfirio@gmail.com	11 954 391 997	https://www.facebook.com/horrana.porfirio	Fátima	11 951 399 544	São Paulo - SP	FAU USP	Design	2º ano	Só participei do N Design SP	G (feminina)	t	Vegetariano	Médio (R$35)	/uploads/12202012_10203906165292796_1213181911_n.jpg	2015-11-01 15:26:06	2015-11-01 15:26:06
43	Pedro Grezzi Lima	Interdesigners - 2º Lote (R$75)	105940882	09279843931	21/02/1994	O+	f	f	f	f	pedro_grezzi@hotmail.com	4599003210	https://www.facebook.com/PGrezzi			cianorte/paraná	Universidade Estadual de Maringá	Design/ projeto de produto	2 ano	nao	G	t	Com Carne	Médio (R$35)	/uploads/IMG_20151102_154206355_HDR.jpg	2015-11-02 17:46:51	2015-11-02 17:46:51
44	Marjorie Endler França	Interdesigners - 3º Lote (R$85)	10.348.348-4	06186731995	07/01/1994	O+	f	f	f	f	marjorie.endler@gmail.com	41 880622	https://www.facebook.com/marjorie.endler	Vera Lucia	41 99514722	Curitiba-Paraná	Universidade Federal do Paraná	Design Gráfico	2012	Sim, NBH 2012	M (feminina)	f	Vegetariano	Pequeno (R$30)	\N	2015-11-04 01:34:02	2015-11-04 01:34:02
45	Guilherme Domingues Laurente	Interdesigners - 2º Lote (R$75)	48 662 133 9	392		AB+	f	f	f	f											P (feminina)	f	Vegetariano	Pequeno (R$30)	\N	2015-11-04 12:29:46	2015-11-04 12:29:46
46	Guilherme Domingues Laurente	Interdesigners - 2º Lote (R$75)	48 662 133 9	392 133 718-61	19/05/1992	AB+	f	f	f	f	laurenteguilherme@gmail.com	9 9745 1505	facebook.com/guilherme.laurente	Rosilene	9 9718 2252	Botucatu - SP	Unesp Bauru	Design	1/2	N Design São Paulo.	P	f	Vegano	Pequeno (R$30)	/uploads/Interdesigner_Laurente.pdf	2015-11-04 12:39:54	2015-11-04 12:39:54
47	Marcela Frasson Almeida	Interdesigners - 1º Lote (R$65)	95055974	08842233960	09/11/1992	B+	f	f	f	t	lightsxworld@gmail.com	(41)99854245	http://facebook.com/marcelafrasson	Marisa Frasson	(41)99854243	Curitiba, Paraná	UTFPR	Design	2º período 		M	f	Vegetariano	Médio (R$35)	\N	2015-11-05 16:38:48	2015-11-05 16:38:48
\.


--
-- Name: InscritoGeral_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pgadmin
--

SELECT pg_catalog.setval('"InscritoGeral_id_seq"', 47, true);


--
-- Data for Name: InscritoSimposio; Type: TABLE DATA; Schema: public; Owner: pgadmin
--

COPY "InscritoSimposio" (id, nome, email, cpf, telefone, instituicao_de_origem, arquivo, comprovante, tematica, titulo, autor1, autor2, autor3, autor4, autor5, resumo, created_at, updated_at, json_avaliacao, autor6, decimal_nota) FROM stdin;
34	Cainã Brinatti Guari	caina_guari@hotmail.com	439794538-12	(19) 9 81862996	Unesp - Universidade Estadual Paulista 'Júlio de Mesquita Filho'	/uploads/DesignGráfico_ACidadeParaOCidadãoODesignComoAgenteDeQualificaçãoDoEspaçoUrbano.pdf	/uploads/12007324_1080572665288668_1286002116_n.jpg	Design Gráfico	A cidade para o cidadão: o design como agente de qualificação do espaço urbano	Cainã Brinatti Guari	Fernanda Henriques	Pedro Ueta			 A Estação Experimental de Bauru possui grande espaço de área verde preservada e seu propósito é servir a comunidade bauruense para a prática de atividades de lazer e conscientização ecológica. No entanto, o local peca em infraestrutura adequada que permita o pleno uso de sua potencialidade. Dessa forma, este projeto visa o desenvolvimento e aplicação de produtos de design no intuito de requalificar o espaço e une atividades de alunos de graduação em design e dois projetos de extensão. A expectativa é capacitar o espaço e promover a interação entre a população e a natureza.	2015-09-16 01:17:39	2015-10-14 19:53:46	[{"professor":13,"nota":7.5,"observacao_titulo":"Bom e objetivo. ","observacao_abstract":"H\\u00e1 confus\\u00e3o entre artigo e projeto. Tamb\\u00e9m n\\u00e3o \\u00e9 poss\\u00edvel \\"capacitar \\" um espa\\u00e7o. N\\u00e3o reflete de forma objetiva e clara do que vai tratar o artigo.","observacao_introducao":"H\\u00e1 frases longas e o encadeamento entre as id\\u00e9ias n\\u00e3o ocorre em alguns momentos. H\\u00e1 falhas quanto ao cumprimento de normas ABNT. Ao final, h\\u00e1 identifica\\u00e7\\u00e3o dos projetos envolvidos o que compromete a revis\\u00e3o cega. ","observacao_revisaoteorica":"Incorre\\u00e7\\u00e3oes gramaticais e tamb\\u00e9m na identifica\\u00e7\\u00e3o das fontes. ","observacao_metodo":"A metodologia est\\u00e1 correta, por\\u00e9m trata da descri\\u00e7\\u00e3o de projeto e n\\u00e3o foi devidamente adaptada para a forma de artigo. ","observacao_resultados":"Os resultados s\\u00e3o apresentados, bem como a proposi\\u00e7\\u00e3o de discuss\\u00f5es poss\\u00edveis. ","observacao_contribuicao":"A pesquisa \\u00e9 relevante e prop\\u00f5e contribui\\u00e7\\u00f5es em Design. ","observacao_bibliografia":"Correta. ","observacao_redacao":"Algumas falhas quanto ao uso de termos adequados ao texto acad\\u00eamico-cient\\u00edfico. "},{"professor":16,"nota":9.5,"observacao_titulo":"adequado","observacao_abstract":"suficiente","observacao_introducao":"clara","observacao_revisaoteorica":"resumida, mas coerente","observacao_metodo":"adequados","observacao_resultados":"O projeto est\\u00e1 em andamento, mas j\\u00e1 apresenta muitos resultados","observacao_contribuicao":"excelente","observacao_bibliografia":"adequada","observacao_redacao":"muito boa"}]	\N	8.50
33	Simone Caroline Soave	simonecsoave@hotmail.com	413.626.658-86	(14) 3646-1512	Universidade do Sagrado Coração	/uploads/DesigndeProduto_OMobiliárioModularComoSoluçãoParaPequenosEspaços–ProjetoUni.pdf	/uploads/Comprovante de depósito2.jpg	Design de Produto	O Mobiliário Modular como Solução para Pequenos Espaços - Projeto Uni	Simone Caroline Soave	Fabio Moizés	João Carlos R. Plácido Silva			O projeto da Linha Uni, teve como objetivo desenvolver um móvel modulado, que se une entre si, formando o móvel desejado conforme a necessidade do cliente	2015-09-15 13:19:21	2015-10-21 23:55:22	[{"professor":1,"nota":0,"observacao_titulo":"teste","observacao_abstract":"teste","observacao_introducao":"teste","observacao_revisaoteorica":"teste","observacao_metodo":"teste","observacao_resultados":"teste","observacao_contribuicao":"teste","observacao_bibliografia":"teste","observacao_redacao":"teste"},{"professor":18,"nota":6.87,"observacao_titulo":"8,0","observacao_abstract":"8,0","observacao_introducao":"7,o","observacao_revisaoteorica":"6,0","observacao_metodo":"5,0","observacao_resultados":"6,0","observacao_contribuicao":"Como contribui\\u00e7\\u00e3o sugiro o aprofundamento do m\\u00e9todo de projeto, com defini\\u00e7\\u00e3o de criterios e diretrizes para  a gera\\u00e7\\u00e3o e sele\\u00e7\\u00e3o de alternativas. Outro aspecto que gostaria de observar \\u00e9 que o processo de produ\\u00e7\\u00e3o do MDF n\\u00e3o me parece relevante como resultado do artigo, da forma como \\u00e9 apresentado \\u00e9 muito gen\\u00e9rico e n\\u00e3o est\\u00e1 diretamente relacionados com o produ\\u00e7\\u00e0o do produto. ","observacao_bibliografia":"8,0","observacao_redacao":"7,0"},{"professor":7,"nota":6.5,"observacao_titulo":"Resume bem o que \\u00e9 tratado no artigo","observacao_abstract":"O resumo passa uma ideia geral do artigo, por\\u00e9m possui muitos erros de portugu\\u00eas e o abstract tamb\\u00e9m cont\\u00e9m erros de ingl\\u00eas.","observacao_introducao":"Busca um introito ao tema, mas erros de concord\\u00e2ncia gramatical e frases desconexas acabam dificultando o pleno entendimento. Faltou tamb\\u00e9m mencionar o objetivo do trabalho.","observacao_revisaoteorica":"Refer\\u00eancias desatualizadas, a \\u00fanica mais recente 2014 \\u00e9 um site. ","observacao_metodo":"Mal descritos, desordenados e confusos.","observacao_resultados":"N\\u00e3o h\\u00e1 discuss\\u00e3o sobre os resultados.","observacao_contribuicao":"A iniciativa de utilizar um m\\u00f3vel modular para pequenos espa\\u00e7os \\u00e9 muito v\\u00e1lida, entretanto as afirma\\u00e7\\u00f5es feitas a respeito da ergonomia e caracter\\u00edsticas f\\u00edsicas do objeto desenvolvido s\\u00e3o question\\u00e1veis.","observacao_bibliografia":"Parte das refer\\u00eancias n\\u00e3o est\\u00e3o citadas no texto.","observacao_redacao":"Texto com muitos erros de portugu\\u00eas e n\\u00e3o organizado."}]	\N	4.46
43	 HELOISA MARIA DE MACEDO SILVA 		 079.995.174-96	83 9 9939 4550	Universidade federal da Paraíba	/uploads/fundamentosteóricos_meninosderio.pdf	/uploads/received_850427581741876.jpeg	Fundamentos Teóricos	 Meninos de Rio: arte e design social na escola 	Heloísa Maria de Macedo Silva	Isabelle Karoline Carvalho do Nascimento	Hêvilla Rayane Valério Costa	Herik Lucas Costa Seixas	Edwiges Fernandes Cavalcante	Esse artigo pretende apresentar o projeto de Extensão Meninos de Rio: arte e design social na escola, um trabalho que nasceu no curso de Design da Universidade Federal da Paraíba. Tal projeto fomenta a vivência na arte e no design em escola da rede de ensino pública local, em especial, junto a crianças de turmas do 1° ao 5° ano do ensino fundamental. O projeto se propõe a refletir sobre a realidade metodológica no ensino destes campos em sala de aula, assim como promover a liberação criativa e potencial inovador desde a infância.	2015-09-19 00:15:26	2015-09-26 21:18:34	[{"professor":6,"nota":9.11,"observacao_titulo":"Adequado. Nota: 10,0","observacao_abstract":"Adequado. Nota: 10,0","observacao_introducao":"Adequada. Introduz o leitor ao tema que ser\\u00e1 desenvolvido. Nota: 10,0","observacao_revisaoteorica":"Mais adequada \\u00e0 Arte-Educa\\u00e7\\u00e3o do que ao Design. Nota: 7,0","observacao_metodo":"Adequado. Nota: 10,0","observacao_resultados":"Adequado. Nota: 10,0","observacao_contribuicao":"Parece-me que na verdade o enfoque maior ainda est\\u00e1 na arte-educa\\u00e7\\u00e3o. Mas como \\u00e9 um projeto recente e interessante, talvez isto possa ser redirecionado. Nota; 7,0","observacao_bibliografia":"N\\u00e3o tem nenhum t\\u00edtulo de design. Nota: 0,0","observacao_redacao":"O artigo est\\u00e1 bem redigido. Nota: 9,0"},{"professor":13,"nota":10,"observacao_titulo":"Adequado. ","observacao_abstract":"Correto e objetivo. Boa tradu\\u00e7\\u00e3o do abstract.  Por\\u00e9m, as palavras-chave criam a expectativa de discuss\\u00e3o em Design Social o que n\\u00e3o acontece ao longo do texto. ","observacao_introducao":"Apresenta de forma clara a estrutura da pesquisa e do artigo. H\\u00e1 alguns detalhes quanto a indica\\u00e7\\u00e3o das fontes (refer\\u00eancias). ","observacao_revisaoteorica":"Refer\\u00eancias adequadas e pertinentes \\u00e0 proposta do artigo. ","observacao_metodo":"Escolhas adequadas e pertinentes com aplica\\u00e7\\u00e3o coerente \\u00e0 proposta do projeto de pesquisa. ","observacao_resultados":"O estudo de caso foi desenvolvido e apresentado com clareza. ","observacao_contribuicao":"O artigo prop\\u00f5e desdobramentos no sentido de promover e ampliar algumas discuss\\u00f5es em Design. ","observacao_bibliografia":"Adequada, embora focada em arte-educa\\u00e7\\u00e3o e n\\u00e3o em design (social). ","observacao_redacao":"Correta em termos acad\\u00eamico-cient\\u00edficos, inclusive quanto ao respeito \\u00e0 revis\\u00e3o cega. Demonstra maturidade em pesquisa. "}]	\N	9.56
41	Vitor Leite Camilo	vitorlec@hotmail.com	439.042.768-75	(18) 996493427	Universidade Estadual Paulista "Júlio de Mesquita Filho"	/uploads/ComunicaçãoVisual_AlgumasquestõesacercadosefeitosdematizsaturaçãoeluminosidadenacapadeTheDarkSideoftheMoon.pdf	/uploads/comprovantesimpósio.jpg	Comunicação Visual	Algumas questões acerca dos efeitos de matiz, saturação e luminosidade na capa de "The Dark Side of the Moon"	Vitor Leite Camilo	Ana Beatriz Pereira de Andrade				Trata-se de uma pesquisa em fase inicial que tem por objetivo investigar aspectos relacionados às teorias das cores, considerando percepção e emoção a partir da observação da capa do álbum intitulado The Dark Side of the Moon. Ao longo do texto são apontados referenciais e ferramentas metodológicas norteadoras para a condução de pesquisa de campo. Há proposição de questões, hipóteses e conclusões preliminares que refletem a interdisciplinaridade da pesquisa em desenvolvimento.  	2015-09-16 01:55:16	2015-10-16 06:54:26	[{"professor":14,"nota":7,"observacao_titulo":"Algumas quest\\u00f5es? um pouco estranho esse inicio de t\\u00edtulo. O titulo j\\u00e1 deveria abordar a quest\\u00e3o \\"impacto emocional\\"","observacao_abstract":"Resumo e abstract est\\u00e3o com alinhamento centralizado.","observacao_introducao":"\\u2018motor criativo\\u2019 n\\u00e3o \\u00e9 uma palavra estrangeira, n\\u00e3o h\\u00e1 necessidade de estar em it\\u00e1lico. corrigir: n\\u00e3o seria o mesmo caso SE estivesse invertido. Uso de p\\u00e1ginas apenas em cita\\u00e7\\u00e3o direta, corrigir:  (Arnheim,\\r\\n1954, p. 94-95). Corrigir: olho humana (olho humano). Corrigir: \\u2018sustenta\\u2019 (tirar o it\\u00e1lico).","observacao_revisaoteorica":"pouca contribui\\u00e7\\u00e3o nessa etapa. ","observacao_metodo":"A inten\\u00e7\\u00e3o \\u00e9 a de apresentar uma lista de pares de sentimentos opostos, com base em\\r\\nesquema proposto por XIN et al. (2007, p. 225).  O esquema deve poderia ter sido abordado na revis\\u00e3o biliogr\\u00e1fica.","observacao_resultados":"poderia j\\u00e1 ter feito as discuss\\u00f5es em cima de alguns dados j\\u00e1 tabulados e n\\u00e3o do que j\\u00e1 se encontrou na literatura: \\"Quanto ao item que questiona se alguma arte\\r\\nrefletiria melhor o conte\\u00fado musical, esperam-se respostas negativas consistentes entre os\\r\\ndois grupos. \\u00c9 importante lembrar que os resultados apresentados acima s\\u00e3o hipot\\u00e9ticos, baseados em leitura da bibliografia\\".","observacao_contribuicao":"Boa - quanto a an\\u00e1lise que se prop\\u00f5e a fazer.\\r\\nBaixa - pelo que apresenta no artigo.","observacao_bibliografia":"pouco","observacao_redacao":"ok"},{"professor":16,"nota":7,"observacao_titulo":"adequado","observacao_abstract":"bom!","observacao_introducao":"J\\u00e1 apresenta parte da pesquisa. Um pouco confuso.","observacao_revisaoteorica":"Projeto no inicio, mas a revis\\u00e3o poderia ser mais consistente, ainda mais porque j\\u00e1 na introdu\\u00e7\\u00e3o se apresenta uma an\\u00e1lise feita a partir de fontes\\/linhas variadas","observacao_metodo":"h\\u00e1 descri\\u00e7\\u00e3o de um m\\u00e9todo, mas que ainda n\\u00e3o foi aplicado","observacao_resultados":"A an\\u00e1lise apresentada seria um dos resultados, mas n\\u00e3o foi considerada como tal. Os demais resultados s\\u00e3o supostos","observacao_contribuicao":"Poder\\u00e1 ser interessante ao final, se todas as rela\\u00e7\\u00f5es propostas forem confirmadas ou refutadas com mais consistencia, pois h\\u00e1 muita subjetividade no apresentado at\\u00e9 o momento.","observacao_bibliografia":"boa, mas precisa de amplia\\u00e7\\u00e3o, pois a proposta envolve muitas \\u00e1reas distintas.","observacao_redacao":"Boa na maior parte do artigo."},{"professor":17,"nota":7.5,"observacao_titulo":"COMENT\\u00c1RIO GERAL: Trata-se de uma boa proposta de pesquisa. Apresenta a fase inicial e portanto com resultados superficiais e pesquisa em campo n\\u00e3o aplicada.","observacao_abstract":"","observacao_introducao":"","observacao_revisaoteorica":"","observacao_metodo":"","observacao_resultados":"","observacao_contribuicao":"","observacao_bibliografia":"","observacao_redacao":""}]	\N	7.17
44	Marina Carvalho Pereira	marina.cp1996@gmail.com	451.094.888-35	(14)99693-2525	Universidade Estadual Paulista "Júlio de Mesquita Filho"	/uploads/HistóriaDoDesign_CapasDeDiscosNosAnosFatais.pdf	/uploads/comprovante de pagamento001.jpg	História do Design	Capas de discos nos anos fatais: Rogério Duarte em destaque	Marina Carvalho Pereira	Ana Beatriz Pereira de Andrade				Trata-se de pesquisa em andamento que tem por objetivo breve revisão bibliográfica e análise gráfico-visual acerca de exemplares de algumas capas de discos projetadas no período da Tropicália. O ponto de partida foram os princípios do Design não canônico e o contexto histórico, político, social e cultural brasileiro da época. Colocam-se em cena alguns exemplares de capas de discos, com autoria de Rogério Duarte, com foco na postura da ruptura estética e alinhamento com a contracultura. À guisa de conclusão considera-se a transgressão, tal como proposta pelo designer, como possibilidade transformadora de caminhos e reflexos no Design gráfico nacional.	2015-09-19 02:52:27	2015-10-15 20:08:45	[{"professor":6,"nota":9.22,"observacao_titulo":"Adequado. Nota: 10,0","observacao_abstract":"Adequado. Nota 10,0","observacao_introducao":"Poderia ter discorrido  menos sobre a Tropic\\u00e1lia e mais sobre as capas de disco e a obra do designer estudado. Nota: 8,0","observacao_revisaoteorica":"Est\\u00e1 junto da introdu\\u00e7\\u00e3o. Nota: 7,0","observacao_metodo":"Adequado. Nota: 9,0","observacao_resultados":"Muito interessante. Nota: 10,0","observacao_contribuicao":"Interessante para a \\u00e1rea. Nota: 10,0","observacao_bibliografia":"Adequada. Nota: 10,0","observacao_redacao":"Artigo bem redigido, dentro das normas e do rigor cient\\u00edfico. Nota: 9,0"},{"professor":16,"nota":8,"observacao_titulo":"adequado","observacao_abstract":"pouco resumido demais","observacao_introducao":"n\\u00e3o h\\u00e1","observacao_revisaoteorica":"fundida com a introdu\\u00e7\\u00e3o, e espalhada nos demais itens","observacao_metodo":"ainda preliminares.","observacao_resultados":"A an\\u00e1lise proposta parece ter sido realizada de forma emp\\u00edrica. ","observacao_contribuicao":"A proposta \\u00e9 bem interessante, o tema relevante, devendo avan\\u00e7ar em pesquisa.","observacao_bibliografia":"aqdequada","observacao_redacao":"adequada"}]	\N	8.61
47	Nilton Henrique Peccioli Filho	nhpf@uol.com.br	16743801860	14-981440598	Anhembi Morumbi	/uploads/Design Urbano_ Design para Inovação Social e Pertencimento - um olhar para a comida de rua da cidade de Bauru na Praça da Paz.pdf	/uploads/Untitled-1-01.png	Design Urbano	Design para inovação social e pertencimento: um olhar para a comida de rua da cidade de Bauru na Praça da Paz	Nilton Henrique Peccioli Filho	Paula da Cruz Landim				Nos últimos anos, o fenômeno “comida de rua” passou a ser valorizado pela sociedade. Isso pode ser constatado pela atenção das diversas mídia: jornais, revistas e programas de televisão, bem como, pela atenção dada pelo poder público dos capitais e grandes centros. Sob a ótica de um design contemporâneo preocupado com o todo e a partir da teoria dos sítios simbólicos de pertencimento, este estudo investiga a percepção dos empreendedores de comida de rua instalados na Praça da Paz, dos moradores do entorno da Praça e da população que reside em outros bairros de Bauru e cidades da região. A partir do levantamento da percepção desses atores, espera-se que este estudo possa contribuir para a reflexão sobre a comida de rua. Quaisquer propostas de intervenções e soluções para o espaço público onde ocorre o encontro do empreendedor com o consumidor de comida de rua devem respeitar os diferentes sítios simbólicos de pertencimento e as verdades locais trazendo inovação social pelo design.	2015-09-21 16:56:14	2015-10-07 18:16:48	[{"professor":11,"nota":7.5,"observacao_titulo":"O t\\u00edtulo apresenta os prop\\u00f3sitos do estudo, entretanto n\\u00e3o h\\u00e1 uma sequ\\u00eancia adequada dos termos, ou seja, o subt\\u00edtulo deveria abordar inicialmente a \\"comida de rua\\" (que \\u00e9 uma abordagem universal e n\\u00e3o apenas da cidade de Bauru); seguido da Pra\\u00e7a da Paz (que \\u00e9 o espa\\u00e7o de an\\u00e1lise), seguido da \\"Cidade de Bauru - SP\\".","observacao_abstract":"O resumo\\/abstract est\\u00e1 adequado, apesar de n\\u00e3o apresentar explicitamente os objetivos do estudo.","observacao_introducao":"Os objetivos do estudo est\\u00e3o na primeira frase da introdu\\u00e7\\u00e3o. Sugere-se apresentar inicialmente a tem\\u00e1tica de abordagem, seguida das justificativas e, consequentemente, os objetivos.","observacao_revisaoteorica":"O referencial te\\u00f3rico est\\u00e1 bem organizado, apesar de apresentar em alguns itens, como as justificativas para os objetivos do trabalho.","observacao_metodo":"Os m\\u00e9todos est\\u00e3o bem descritos","observacao_resultados":"H\\u00e1 resultados apresentados no item antes da \\"Metodologia\\". O autor deve observar com aten\\u00e7\\u00e3o este problema grave.","observacao_contribuicao":"O autor demonstra as contribui\\u00e7\\u00f5es para a \\u00e1rea.","observacao_bibliografia":"A lista bibliogr\\u00e1fica \\u00e9 relevante e est\\u00e1 bem apresentada.","observacao_redacao":"A reda\\u00e7\\u00e3o \\u00e9 adequada, mas \\u00e9 importante organizar a estrutura do estudo (H\\u00e1 resultados antes da metodologia)."},{"professor":10,"nota":9.5,"observacao_titulo":"N\\u00e3o foi retirado o nome dos autores.","observacao_abstract":"ok","observacao_introducao":"Qual a fonte da informa\\u00e7\\u00e3o de que 95% dos fornecedores de comida de rua \\u00e9 clandestino?","observacao_revisaoteorica":"Outros autores tamb\\u00e9m podem fornecer um contraponto na an\\u00e1lise do lugar, como Vicente Del Rey ; e o conceito de topofilia, termo j\\u00e1 bastante usado,  pode vir a ajudar na fundamenta\\u00e7\\u00e3o te\\u00f3rica pois parece encaixar na proposta e por ser bastante usado tende a ser melhor compreendido pelos leitores.","observacao_metodo":"ok","observacao_resultados":"ok","observacao_contribuicao":"Excelente exemplo de como envolver a popula\\u00e7\\u00e3o local em projetos de design urbano.","observacao_bibliografia":"Alguns autores da bibliografia n\\u00e3o aparecem referenciados ao longo do texto (Bubber, Cano, Cohen) e podem ser retirados da lista.","observacao_redacao":"A revis\\u00e3o cega ficou comprometida pois n\\u00e3o foi retirado o nome dos autores."}]	\N	8.50
48	Ingo Cescatto Germer	ingocgermer@hotmail.com	385125858-46	14 997018041	UNESP - Bauru	/uploads/Ingo_artigo_interdesigners.pdf	/uploads/12033589_10207852573221467_1699868402_n.jpg	Design de Produto	Análise de mobiliários públicos na cidade de Lisboa	Ingo Cescatto Germer	Tomás Queiroz Ferreira Barata	Paulo Manuel Cadete Ferrão	Isabella Martino Matos	Cainã Brinatti Guari	Vinculado ao projeto de pesquisa original, (FAPESP processo nº 2014/04553-7), intitulado "Desenvolvimento de protótipos de mobiliário público a partir de madeira serrada de eucalipto", desenvolveu-se a bolsa de estágio de pesquisa no exterior na cidade de Lisboa (BEPE processo nº 2015/02589-7). Esse estágio aprofundou conceitos de sustentabilidade relacionados aos projetos de produtos bem como a análise do mobiliário público através de atividades como visitação, coleta de dados, registro fotográfico e desenvolvimento de alternativas que contribuem com o desenvolvimento dos protótipos físicos feitos em laboratório conforme o plano inicial além é claro do aprimoramento de todo o repertório da pesquisa. 	2015-09-21 20:27:16	2015-10-12 20:05:11	[{"professor":15,"nota":10,"observacao_titulo":"10,0","observacao_abstract":"9,0","observacao_introducao":"9,0","observacao_revisaoteorica":"8,0","observacao_metodo":"10,0","observacao_resultados":"10,0","observacao_contribuicao":"6,0","observacao_bibliografia":"10,0","observacao_redacao":"7,5"},{"professor":15,"nota":10,"observacao_titulo":"T\\u00edtulo (10,0)\\r\\n- muito bom.","observacao_abstract":"Abstract\\/Resumo: (9,0)\\r\\n- exclua a express\\u00e3o \\"al\\u00e9m \\u00e9 claro\\";\\r\\n- mude a ordem do conte\\u00fado: identifique primeiro do que trata o artigo, ao \\r\\n\\r\\nfinal identifique que estes s\\u00e3o resultados de projeto de uma bolsa de est\\u00e1gio.","observacao_introducao":"Introdu\\u00e7\\u00e3o: (9,0)\\r\\nAs primeiras 4 frases da introdu\\u00e7\\u00e3o ficariam melhor caso desse maior \\u00eanfase aos princ\\u00edpios e ferramentas que foram aprendidos e aplicados, e s\\u00f3 depois de revel\\u00e1-los identificar que os mesmos s\\u00e3o fruto de vasta pesquisa da equipe do Prof. Dr. Paulo Ferr\\u00e3o no Laborat\\u00f3rio IN+1 que \\u00e9 descrita no livro \\"Ecologia Industrial\\", utilizado como base te\\u00f3rica para as an\\u00e1lises realizadas.","observacao_revisaoteorica":"Revis\\u00e3o Te\\u00f3rica (8,0):\\r\\n- N\\u00e3o fez cita\\u00e7\\u00e3o de todos os livros que contam na lista de Referencias.","observacao_metodo":"M\\u00e9todo (10,0)\\r\\n- bem explicitado.","observacao_resultados":"Resultados e Discuss\\u00e3o (10,0)\\r\\n- bem explicitado.","observacao_contribuicao":"Contribui\\u00e7\\u00e3o para \\u00e1rea de conhecimento (6,0) \\r\\n- poderia ter apontado, de foma mais explicita na conclus\\u00e3o, as contribui\\u00e7\\u00f5es espec\\u00edficas que este m\\u00e9todo de an\\u00e1lise a luz da sustentabilidade traz para configura\\u00e7\\u00e3o dos espa\\u00e7os urbanos.","observacao_bibliografia":"Bibliografia (10,0)","observacao_redacao":"Reda\\u00e7\\u00e3o (7,5)\\r\\n- rever as recomenda\\u00e7\\u00f5es apontadas para o t\\u00f3pico Resumo e Introdu\\u00e7\\u00e3o."},{"professor":7,"nota":7,"observacao_titulo":"O artigo n\\u00e3o trata apenas de uma an\\u00e1lise de mobili\\u00e1rio p\\u00fablico, mas tamb\\u00e9m da gera\\u00e7\\u00e3o de alternativas mediante os resultados da an\\u00e1lise realizada. Portanto, o t\\u00edtulo deveria ser repensado.\\r\\n(8,0)","observacao_abstract":"O resumo n\\u00e3o especifica claramente o objetivo do trabalho, o que acaba confundindo o leitor a respeito de quais foram os resultados obtidos.\\r\\nO \\"abstract\\" possui muitos erros de ingl\\u00eas.\\r\\n(7,0)","observacao_introducao":"A INTRODU\\u00c7\\u00c3O n\\u00e3o \\u00e9 uma continua\\u00e7\\u00e3o do resumo e sim, a parte inicial do artigo. Nesse caso, o texto inicia-se por: \\"Este est\\u00e1gio de pesquisa no exterior\\", mas que est\\u00e1gio \\u00e9 esse? Faltaram informa\\u00e7\\u00f5es que descrevessem melhor esse est\\u00e1gio.\\r\\n(6,0)","observacao_revisaoteorica":"O primeiro par\\u00e1grafo e o in\\u00edcio do segundo, dizem praticamente a mesma coisa. Entretanto o primeiro par\\u00e1grafo est\\u00e1 bem confuso.\\r\\nCuidado ao utilizar as palavras \\"mobili\\u00e1rio\\" e \\"equipamento\\", pois elas possuem sentidos distintos (Ver NBR 9284 e NBR 9283).\\r\\nO \\u00faltimo par\\u00e1grafo da revis\\u00e3o te\\u00f3rica ficaria muito melhor como sendo o \\u00faltimo par\\u00e1grafo da introdu\\u00e7\\u00e3o.\\r\\nJ\\u00e1 que um dos objetivos do trabalho \\u00e9 aprofundar conceitos de \\"sustentabilidade\\", essa tem\\u00e1tica ficou defasada na revis\\u00e3o te\\u00f3rica e em todo o texto.\\r\\n(5,0)","observacao_metodo":"Evite utilizar express\\u00f5es como \\"diversos outros locais\\", \\u00e9 melhor que voc\\u00ea relate todos os locais visitados.\\r\\n(9,0)","observacao_resultados":"Nenhuma das figuras est\\u00e1 \\"linkada\\" ao texto.\\r\\nQuais foram os 6 modelos de bancos analisados? Faltou uma imagem com esses 6 bancos.\\r\\nPor qu\\u00ea esses 6 bancos foram selecionados?\\r\\nQual foi o crit\\u00e9rio para essa sele\\u00e7\\u00e3o?\\r\\nTamb\\u00e9m faltou uma discuss\\u00e3o de cada uma das etapas abordadas, especialmente da gera\\u00e7\\u00e3o de novas alternativas.\\r\\n(5,0)","observacao_contribuicao":"O desenvolvimento de mobili\\u00e1rios que atendam \\u00e0s necessidades da popula\\u00e7\\u00e3o \\u00e9 de grande valia, principalmente quando requisitos ergon\\u00f4micos s\\u00e3o observados e obedecidos. Nota-se tamb\\u00e9m, que o design deve compreender as mudan\\u00e7as da cidade e da sociedade bem como deve lidar com tal complexidade por meio do desenvolvimento de estrat\\u00e9gias que visam alcan\\u00e7ar a melhoria da qualidade de vida e a possibilidade de socializa\\u00e7\\u00e3o, sendo o banco um importante elemento para essas rela\\u00e7\\u00f5es.\\r\\n(8,0)","observacao_bibliografia":"Nem todas as refer\\u00eancias bibliogr\\u00e1ficas est\\u00e3o citadas no texto.\\r\\nNa verdade foram citados apenas 3 autores.\\r\\n(8,0)","observacao_redacao":"O texto possui muitas informa\\u00e7\\u00f5es que acabam se repetindo.\\r\\n(7,5)"}]	\N	9.00
45	Brenda Maria Saes Palma	bresaesp@hotmail.com	087.677.379-00	(44) 8408-6754	Universidade Estadual de Maringá - UEM	/uploads/DesignProduto_AnáliseSemânticaDoMobiliárioLitúrgicoEmIgrejasCatólicas-UmEstudoDeCaso.pdf	/uploads/Comprovante de Depósito.jpg	Design de Produto	Análise Semântica do Mobiliário Litúrgico em Igrejas Católicas – um Estudo de Caso	Brenda Maria Saes Palma	Professora Me. Anelise Guadagnin Dalberto	Professor Dr. Bruno Montanari Razza			 O mobiliário litúrgico em Igrejas Católicas Romanas exerce papel fundamental na liturgia católica durante a celebração do ritual da missa e, portanto, precisam atender a determinados critérios construtivos para exercer adequadamente sua função prática e simbólica. Esta pesquisa teve por objetivo identificar a aplicação dos requisitos construtivos e simbólicos do mobiliário litúrgico, um assunto ainda escasso na literatura, por meio de um estudo de caso no Santuário Diocesano, Paróquia N.S de Fátima, e na Paróquia Santa Rita de Cássia, localizados na Cianorte - PR. Os resultados indicaram inadequações formais nos mobiliários avaliados.	2015-09-21 00:48:17	2015-10-13 14:47:36	[{"professor":10,"nota":6,"observacao_titulo":"ok","observacao_abstract":"-","observacao_introducao":"Com a leitura da introdu\\u00e7\\u00e3o fica parecendo que a pesquisa est\\u00e1 montada apenas para validar uma ideia j\\u00e1 constatada (a descaracteriza\\u00e7\\u00e3o do mobili\\u00e1rio).  Essa descaracteriza\\u00e7\\u00e3o, apontada como sendo por falta de recursos, n\\u00e3o demonstraria apenas uma evolu\\u00e7\\u00e3o cultural atrav\\u00e9s do sincretismo, t\\u00e3o comum em qualquer religi\\u00e3o?\\r\\n\\u00c9 necess\\u00e1rio descrever as regras ligadas \\u00e0 liturgia e separar dos outros crit\\u00e9rios, como harmonia ou funcionalidade, pois enquanto um \\u00e9 baseado em um dogma, os outros s\\u00e3o relativos, variam de acordo com a percep\\u00e7\\u00e3o pessoal ou a cultura de cada um.","observacao_revisaoteorica":"Na revis\\u00e3o te\\u00f3rica fica claro que a igreja se adapta \\u00e0s conveni\\u00eancias de cada \\u00e9poca e alguns conceitos s\\u00e3o abstratos demais, necessitando de defini\\u00e7\\u00e3o mais objetiva para proceder an\\u00e1lise. Por exemplo, como conceitos como sagrado, digno e nobre podem ser representados? O que define que algo contenha estes conceitos e o que n\\u00e3o cont\\u00e9m?","observacao_metodo":"N\\u00e3o fica claro que instrumentos de an\\u00e1lise s\\u00e3o utilizados. Precisa definir crit\\u00e9rios objetivos para poder haver compara\\u00e7\\u00e3o. Existe um modelo padr\\u00e3o para observar os poss\\u00edveis desvios? ","observacao_resultados":"Foram analisadas cinco igrejas, mas s\\u00f3 apareceram duas nos resultados. Na conclus\\u00e3o, menciona-se  um t\\u00f3pico \\"A mob\\u00edlia lit\\u00fargica\\" que reuniria os crit\\u00e9rios de aplica\\u00e7\\u00e3o, mas esse t\\u00f3pico n\\u00e3o existe. Os crit\\u00e9rios que aparecem na revis\\u00e3o bibliogr\\u00e1fica est\\u00e3o dispersos e desorganizados e precisam de defini\\u00e7\\u00e3o mais objetiva.\\r\\n","observacao_contribuicao":"Embora necessite de adequa\\u00e7\\u00e3o metodol\\u00f3gica, o texto pode contribuir para registro hist\\u00f3rico e talvez, servir como ponto de partida para uma pesquisa mais aprofundada.","observacao_bibliografia":"As refer\\u00cancias (DICIO, 2015), (LIMA, 2010, p. 09), (CONC\\u00cdLIUM SACROSANCTUM, 1996), (IGMR, 2002),  n\\u00e3o constam  da bibliografia ao final.","observacao_redacao":"Observa\\u00e7\\u00e3o \\u00e0 comiss\\u00e3o organizadora. \\r\\nOs autores n\\u00e3o foram omitidos no texto, portanto a revis\\u00e3o cega foi comprometida. Mesmo assim, fiz uma an\\u00e1lise neutra na medida do poss\\u00edvel, mas se a comiss\\u00e3o quiser anular minha an\\u00e1lise fiquem \\u00e0 vontade. Recomendo omitir o nome dos autores se passarem para outro parecerista."},{"professor":8,"nota":8.8,"observacao_titulo":"","observacao_abstract":"","observacao_introducao":"Apesar de sucinta, a introdu\\u00e7\\u00e3o mostra a originalidade do trabalho, justifica-o e mostra relev\\u00e2ncia cient\\u00edfica do mesmo.","observacao_revisaoteorica":"A revis\\u00e3o te\\u00f3rica carece de fontes em alguns par\\u00e1grafos, visto que os mesmo n\\u00e3o podem refletir a ideia dos autores.\\r\\nDevem ser verificados erros de pontua\\u00e7\\u00e3o.","observacao_metodo":"","observacao_resultados":"Nos m\\u00e9todos, foram apontadas cinco igrejas selecionadas para a an\\u00e1lise, por\\u00e9m nos resultados apenas duas s\\u00e3o apresentadas. N\\u00e3o ficou claro o motivo de somente dias igrejas aparecerem nos resultados, dando a entender que o trabalho encontra-se incompleto.","observacao_contribuicao":"","observacao_bibliografia":"","observacao_redacao":"Alguns erros de pontua\\u00e7\\u00e3o est\\u00e3o presentes na reda\\u00e7\\u00e3o."}]	\N	7.40
55	Akira Souza Iamaguti	akira_iamaguti@yahoo.com.br	313.889.918-88	14 3010 2320	Unesp	/uploads/Eco Design_Uma Experiência de Eco Design no Carnaval.pdf	/uploads/CAM00350.jpg	Eco Design (design sustentável)	Uma Experiência de Eco Design no Carnaval	Akira Souza Iamaguti	Claudio Roberto y Goya	Marcela Rezende Pires Rosas	Rodrigo Rocha Nogueira	Vinícius Vilarim Machado	Tratase do relato de experiências do Projeto de Extensão Universitária em Design, Laboratório de Design Solidária, Labsol, do Departamento de Design da Faculdade de Artes e Comunicações, FAAC, Unesp Bauru, junto à Escola de Samba Coroa Imperial, no ano de 2014 e 2015. A parceira entre a Coroa Imperial iniciouse em 2013 e a experiência acumulada no desfile anterior e a reflexão sobre o papel do Design permitiu uma rara experiência universitária, na construção do desfile de 2014, abarcando a aplicação do eco-design, a atividade projetual, atividades de pesquisa e a extensão universitária. Permitiu refletir sobre questões de metodologia e sobre o papel social do design como agente da mudança social.	2015-09-22 16:24:03	2015-10-16 04:49:49	[{"professor":1,"nota":0,"observacao_titulo":"teste","observacao_abstract":"teste","observacao_introducao":"teste","observacao_revisaoteorica":"teste","observacao_metodo":"teste","observacao_resultados":"teste","observacao_contribuicao":"teste","observacao_bibliografia":"teste","observacao_redacao":"teste"}]	\N	0.00
54	JOSÉ OCTÁVIO MARINELLI MARINO	ze_m.marino@hotmail.com	36567276860	(16) 9 8826 0912	Universidade Estadual Paulista Júlio de Mesquita Filho - UNESP Bauru	/uploads/materiaiseprocessos_shapedebambuilustrado.pdf	/uploads/comprovante.jpg	Materiais e processo	Shape de Bambu Ilustrado	José Octávio Marinelli Marino	Lucas Wakamatsu	Ricardo Ximenez			A ideia é construir um skate longboard de bambu, unindo alunos do design gráfico e do design de produto, focando no processo e testando técnicas para a construção do shape e aplicação de uma ilustração digital na parte inferior. O Shape de Bambu Ilustrado se baseia no conceito da mudança, buscando em seu processo de criação a troca de conhecimento dos participantes.	2015-09-22 02:51:48	2015-10-12 16:03:33	[{"professor":15,"nota":10,"observacao_titulo":"T\\u00edtulo (10,0)\\r\\n- muito bom","observacao_abstract":"Abstract\\/Resumo: (8,0)\\r\\n- Poderia explicitar no resumo a principal motiva\\u00e7\\u00e3o desta proposta de \\r\\n\\r\\ndesenvolvimento, por exemplo: o dom\\u00ednio e identifica\\u00e7\\u00e3o de pr\\u00e1ticas de \\r\\n\\r\\ndesenvolvimento das duas especialidades do design - gr\\u00e1fico e produto\\r\\nou a confec\\u00e7\\u00e3o mais eficientes com o mat\\u00e9ria-prima.","observacao_introducao":"Introdu\\u00e7\\u00e3o (10,0)\\r\\n- muito bom.","observacao_revisaoteorica":"Revis\\u00e3o Te\\u00f3rica (8,0)\\r\\n- No sub-t\\u00f3pico \\"Bambu e sustentabilidade\\" poderia ter finalizado com uma \\r\\n\\r\\ndescri\\u00e7\\u00e3o t\\u00e9cnica que ligasse as caracter\\u00edsticas do bambu as necessidades \\r\\n\\r\\nespec\\u00edficas de material para produ\\u00e7\\u00f5es de shape.\\r\\n- No sub-t\\u00f3pico \\"Ilustra\\u00e7\\u00e3o e Composi\\u00e7\\u00e3o\\" poderia ter apresentando alguma \\r\\n\\r\\nrefer\\u00eancia da produ\\u00e7\\u00e3o gr\\u00e1fica ligada a cultura do surf e do skate.","observacao_metodo":"M\\u00e9todo (10,0)\\r\\n- No subt\\u00f3pico \\"Confec\\u00e7\\u00e3o do shape\\", mude o tempo verbal da frase para o \\r\\n\\r\\npassado (ex.: \\"foi realizado atrav\\u00e9s de duas etapas\\").","observacao_resultados":"Resultados e Discuss\\u00e3o (9,0)\\r\\n- faltou apresentar de forma ilustrada o resultado da parte gr\\u00e1fica.","observacao_contribuicao":"Contribui\\u00e7\\u00e3o para \\u00e1rea de conhecimento (10,0)","observacao_bibliografia":"Bibliografia (7,0)\\r\\n- as referencias foram citadas no t\\u00f3pico Referencial Te\\u00f3rico, mas n\\u00e3o foram listadas ao final do artigo.","observacao_redacao":"Reda\\u00e7\\u00e3o (9,0)\\r\\n- veja as observa\\u00e7\\u00f5es feitas sobre os t\\u00f3picos \\"Resumo\\/Abstract\\" e \\"M\\u00e9todo\\"."}]	\N	10.00
52	Michel Silvestre de Souza	michel_silvestre@msn.com	353.728.708-93	18997574978	Centro Universitário Toledo	/uploads/designgrafico_AInfluênciadoBIMnoEnsinodasUniversidadeseaResistênciadoCADnoNoroeste Paulista.pdf	/uploads/comprovante pgto 2 artigo.jpg	Design Gráfico	A Influência do BIM no Ensino das Universidades e a Resistência do CAD no Noroeste Paulista	Michel Silvestre de Souza					CAD é o principal software de computação gráfica para representação de projetos e a tecnologia BIM é uma nova ferramenta utilizada para modelagem da informação da construção. Existe uma resistência dos profissionais para implementação deste paradigma. Analisamos escritórios de projetos, para identificar suas dificuldades, e o ensino do BIM nas universidades. A falta de interesse em novas tecnologias, a comodidade em utilizar os mesmos programas, a falta de conhecimento do BIM, são algumas causas na recusa do software. O presente trabalho pretende ajudar na disseminação do BIM na área do design e apresentar os ganhos com seu uso.	2015-09-22 00:42:09	2015-10-14 20:17:20	[{"professor":13,"nota":8.5,"observacao_titulo":"Objetivo e adequado. ","observacao_abstract":"Recomenda-se adequa\\u00e7\\u00e3o de alguns termos para formato acad\\u00eamico-cient\\u00edfico.  O abstract merece revis\\u00e3o quanto \\u00e0 tradu\\u00e7\\u00e3o. ","observacao_introducao":"Os par\\u00e1grafos s\\u00e3o longos o que interfere no ritmo da leitura e compreens\\u00e3o. Por\\u00e9m, o texto \\u00e9 claro e situa o leitor quanto ao que vai ser tratado ao longo do artigo. ","observacao_revisaoteorica":"H\\u00e1 incorre\\u00e7\\u00e3o na indica\\u00e7\\u00e3o das fontes, conforme normas ABNT. S\\u00e3o elencados poucos autores. ","observacao_metodo":"A metodologia \\u00e9 adequada \\u00e0 proposta do artigo e foram aplicadas ferramentas de forma correta. ","observacao_resultados":"Apresenta resultados e prop\\u00f5e discuss\\u00f5es de forma adequada e coerente. ","observacao_contribuicao":"Relevante. ","observacao_bibliografia":"Restrita \\u00e1 fontes dispon\\u00edveis em rede. Caberia ampliar. ","observacao_redacao":"Boa, por\\u00e9m com frases e par\\u00e1grafos longos. Necessita adequa\\u00e7\\u00e3o \\u00e0 linguagem acad\\u00eamico-cient\\u00edfica. "},{"professor":16,"nota":5,"observacao_titulo":"pouco atraente; s\\u00e3o muitas siglas: pouco confuso","observacao_abstract":"regular","observacao_introducao":"regular, h\\u00e1 termos e siglas n\\u00e3o especificados.","observacao_revisaoteorica":"clara","observacao_metodo":"claros","observacao_resultados":"claros, mas de interesse de arquitetos e engenheiros","observacao_contribuicao":"O interesse do artigo est\\u00e1 nas \\u00e1reas de arquitetura e engenharia. Apesar do autor citar os designer nos itens iniciais, eles n\\u00e3o participaram da pesquisa em si","observacao_bibliografia":"Adequada ao tema, espec\\u00edfica, mas fora da \\u00e1rea do design","observacao_redacao":"razo\\u00e1vel"}]	\N	6.75
39	Renata Svizzero Fakhoury	refakhoury@hotmail.com	384882478-77	(14)99797-8979	UNIP	/uploads/FundamentosTeóricos_EmoçãoDoAdventoDoMovimentoPós-ModernoAoMundoTecnológicoAtual.pdf	/uploads/Depósito.JPG	Fundamentos Teóricos	Emoção: do Advento do Movimento Pós-Moderno ao Mundo Tecnológico Atual	Renata Svizzero Fakhoury	Paula da Cruz Landim				Ao longo das mudanças históricas, sociais, econômicas e comportamentais, o objeto passou por modificações quanto as suas necessidades. O uso e a função não eram mais apenas suficientes para suprir as expectativas do consumidor requerendo então a sua função atual mais importante: agregar valor emocional. A tecnologia surge, aliada a programas computacionais, com o intuito de auxiliar a criação, a representação e a visualização dos produtos. Este artigo tem como objetivo provar que a utopia é usada em projetos arquitetônicos e layouts de decoração para ludibriar a percepção dos clientes e influenciar seus atos na compra de imóveis. Arquivo PDF e Comprovante anexados.	2015-09-16 01:33:12	2015-10-15 19:41:52	[{"professor":13,"nota":5,"observacao_titulo":"O t\\u00edtulo \\u00e9 amplo e n\\u00e3o especifica do que vai tratar o artigo. Nota: 5","observacao_abstract":"O resumo n\\u00e3o define os objetos de estudo, a estrutura e do que trata o artigo. Prop\\u00f5e como objetivo \\"provar\\" e menciona \\"utopia\\". O t\\u00edtulo menciona emo\\u00e7\\u00e3o. O texto \\u00e9 confuso. Nota 5. ","observacao_introducao":"A introdu\\u00e7\\u00e3o apresenta o conte\\u00fado do artigo, por\\u00e9m o texto n\\u00e3o est\\u00e1 claro. Nota 5. ","observacao_revisaoteorica":"A revis\\u00e3o te\\u00f3rica tamb\\u00e9m \\u00e9 confusa. Ora apresenta datas e contextos, ora faz afirma\\u00e7\\u00f5es um tanto question\\u00e1veis. A t\\u00edtulo  de exemplo: \\"O antigo pensamento  o Design se preocupava apenas com a utilidade do objeto, com o valor do uso, praticidade e viabilidade econ\\u00f4mica. Os produtos e bens devem servir para serem utilizados e n\\u00e3o causar nada al\\u00e9m disso. Nenhuma sensa\\u00e7\\u00e3o, emo\\u00e7\\u00e3o ou preocupa\\u00e7\\u00e3o era levada em conta.\\" Sem conxtextualizar fontes ou contextos, n\\u00e3o est\\u00e1 claro o que seja \\"antigo pensamento do Design\\".  Nota 5. ","observacao_metodo":"Reitero que a pouca clareza do texto, complica avalia\\u00e7\\u00e3o de m\\u00e9todo. Trata de emo\\u00e7\\u00e3o, menciona mobili\\u00e1rio e layouts de dcora\\u00e7\\u00e3o, arquitetura, design e consumo. Por\\u00e9m, n\\u00e3o h\\u00e1 aprofundamento e encadeamento das refer\\u00eancias. Nota 5. ","observacao_resultados":"Os conceitos n\\u00e3o s\\u00e3o aprofundados e encadeados. Portanto, os resultados n\\u00e3o s\\u00e3o conclusivos e tampouco estabelecem discuss\\u00f5es poss\\u00edveis. Nota 5. ","observacao_contribuicao":"N\\u00e3o se identifica contribui\\u00e7\\u00f5es relevantes devido \\u00e0 estrutura do artigo e montagem do texto. Nota 5. ","observacao_bibliografia":"H\\u00e1 incorre\\u00e7\\u00f5es, n\\u00e3o somente nas refer\\u00eancias, quanto ao longo do texto quanto \\u00e0 aplica\\u00e7\\u00e3o de normas. H\\u00e1 obras de refer\\u00eancia para tratar de emo\\u00e7\\u00e3o e de consumo n\\u00e3o mencionadas. Nota 5. ","observacao_redacao":"H\\u00e1 in\\u00fameras incorre\\u00e7\\u00f5es ortogr\\u00e1ficas e tambem gramaticais. Nota 5. "},{"professor":13,"nota":5,"observacao_titulo":"O t\\u00edtulo \\u00e9 amplo e n\\u00e3o especifica do que vai tratar o artigo. Nota: 5","observacao_abstract":"O resumo n\\u00e3o define os objetos de estudo, a estrutura e do que trata o artigo. Prop\\u00f5e como objetivo \\"provar\\" e menciona \\"utopia\\". O t\\u00edtulo menciona emo\\u00e7\\u00e3o. O texto \\u00e9 confuso. Nota 5. ","observacao_introducao":"A introdu\\u00e7\\u00e3o apresenta o conte\\u00fado do artigo, por\\u00e9m o texto n\\u00e3o est\\u00e1 claro. Nota 5. ","observacao_revisaoteorica":"A revis\\u00e3o te\\u00f3rica tamb\\u00e9m \\u00e9 confusa. Ora apresenta datas e contextos, ora faz afirma\\u00e7\\u00f5es um tanto question\\u00e1veis. A t\\u00edtulo  de exemplo: \\"O antigo pensamento  o Design se preocupava apenas com a utilidade do objeto, com o valor do uso, praticidade e viabilidade econ\\u00f4mica. Os produtos e bens devem servir para serem utilizados e n\\u00e3o causar nada al\\u00e9m disso. Nenhuma sensa\\u00e7\\u00e3o, emo\\u00e7\\u00e3o ou preocupa\\u00e7\\u00e3o era levada em conta.\\" Sem conxtextualizar fontes ou contextos, n\\u00e3o est\\u00e1 claro o que seja \\"antigo pensamento do Design\\".  Nota 5. ","observacao_metodo":"Reitero que a pouca clareza do texto, complica avalia\\u00e7\\u00e3o de m\\u00e9todo. Trata de emo\\u00e7\\u00e3o, menciona mobili\\u00e1rio e layouts de dcora\\u00e7\\u00e3o, arquitetura, design e consumo. Por\\u00e9m, n\\u00e3o h\\u00e1 aprofundamento e encadeamento das refer\\u00eancias. Nota 5. ","observacao_resultados":"Os conceitos n\\u00e3o s\\u00e3o aprofundados e encadeados. Portanto, os resultados n\\u00e3o s\\u00e3o conclusivos e tampouco estabelecem discuss\\u00f5es poss\\u00edveis. Nota 5. ","observacao_contribuicao":"N\\u00e3o se identifica contribui\\u00e7\\u00f5es relevantes devido \\u00e0 estrutura do artigo e montagem do texto. Nota 5. ","observacao_bibliografia":"H\\u00e1 incorre\\u00e7\\u00f5es, n\\u00e3o somente nas refer\\u00eancias, quanto ao longo do texto quanto \\u00e0 aplica\\u00e7\\u00e3o de normas. H\\u00e1 obras de refer\\u00eancia para tratar de emo\\u00e7\\u00e3o e de consumo n\\u00e3o mencionadas. Nota 5. ","observacao_redacao":"H\\u00e1 in\\u00fameras incorre\\u00e7\\u00f5es ortogr\\u00e1ficas e tambem gramaticais. Nota 5. "},{"professor":16,"nota":7,"observacao_titulo":"Um pouco pretencioso demais","observacao_abstract":"pouco claro","observacao_introducao":"conclus\\u00e3o da mesma confusa","observacao_revisaoteorica":"Boa","observacao_metodo":"N\\u00e3o h\\u00e1.","observacao_resultados":"O objetivingidoo inicial proposto n\\u00e3o \\u00e9 plenamente at","observacao_contribuicao":"Discuss\\u00f5es te\\u00f3ricas e hist\\u00f3ricas interessantes, podem sim contribuir. Por\\u00e9m,os objetivos  a que se prop\\u00f5e, afinal, n\\u00e3o s\\u00e3o cumpridos","observacao_bibliografia":"adequada","observacao_redacao":"boa, por\\u00e9m algumas palavras faltantes tiram sentido de algumas frases"}]	\N	5.67
53	Guiherme da Silva Bertolaccini	guilhermebertolaccini@gmail.com	399.189.958-23	(14) 981460183	Univi. Estadual Paulista - UNESP	/uploads/ErgnonomiaeAcessibilidade_ProblemasBiomecânicosRelacionadosàAtividadedoCirurgiãoDentistaRecomendaçõesparaoDesignErgonômico.pdf	/uploads/WIN_20150915_231132.JPG	Ergonomia e Acessibilidade	Problemas Biomecânicos Relacionados à Atividade do Cirurgião Dentista: Recomendações para o Design Ergonômico	Idinei Francisco Pires de Carvalho Filho	Rafael Kenji Nakajima	Guilherme da Silva Bertolaccini	Fausto Orsi Medola	Olimpio Jose Pinheiro	A postura estática e inadequada mantida por tempo prolongado tem sido apontada como um dos fatores que contribuem para a sobrecarga postural na atividade do cirurgião dentista. O mocho, interface de suporte postural do dentista, tem sido apontado como um dos aspectos de inadequação ergonômica, contribuindo para elevado índice de desconforto/dor entre os profissionais. Este estudo teve como objetivo discutir os problemas biomecânicos relacionados à atividade do cirurgião dentista, buscando levantar recomendações ergonômicas para o design de interfaces posturais.	2015-09-22 00:54:26	2015-10-13 03:29:37	[{"professor":11,"nota":9.8,"observacao_titulo":"O T\\u00edtulo est\\u00e1 coerente com os objetivos e auto-explicativo","observacao_abstract":"O abstract est\\u00e1 bem estruturado, apresenta a problem\\u00e1tica, as justificativas e os objetivos do estudo.","observacao_introducao":"A introdu\\u00e7\\u00e3o apresenta adequadamente as quest\\u00f5es de pesquisa que o estudo prop\\u00f4s-se atender, e os prop\\u00f3sitos do mesmo.","observacao_revisaoteorica":"\\u00c9 ampla e adequada, refor\\u00e7a os argumentos dos autores para realiza\\u00e7\\u00e3o do estudo.","observacao_metodo":"Os m\\u00e9todos descrevem os procedimentos descritos por Moraes e Mont\\u00b4alv\\u00e3o (2000) quanto \\u00e0 abordagem ergon\\u00f4mica.","observacao_resultados":"Os resultados est\\u00e3o adequados, mas poderiam ser mais explorados. ","observacao_contribuicao":"H\\u00e1 grande contribui\\u00e7\\u00e3o para a \\u00e1rea do conhecimento, especialmente com vistas \\u00e0 integra\\u00e7\\u00e3o com a Odontologia, cuja unidade da USP aqui na cidade de Bauru (SP) \\u00e9 refer\\u00eancia internacional.","observacao_bibliografia":"A bibliografia \\u00e9 ampla e concisa!","observacao_redacao":"O artigo est\\u00e1 bem redigido."},{"professor":15,"nota":10,"observacao_titulo":"T\\u00edtulo: (10,0)","observacao_abstract":"Abstract\\/Resumo: (10,0)\\r\\n- muito bom.","observacao_introducao":"Introdu\\u00e7\\u00e3o (10,0)\\r\\n- muito bom.","observacao_revisaoteorica":"Revis\\u00e3o Te\\u00f3rica (10,0)\\r\\n- \\u00f3tima","observacao_metodo":"M\\u00e9todo (7,0)\\r\\n- No t\\u00f3pico \\"Abordagem Ergon\\u00f4mica\\", os autores identificam como m\\u00e9todo a ser aplicado o de \\"Interven\\u00e7\\u00e3o Ergonomizadora\\" (Morae e Mont'Alv\\u00e3o, 2000). Valeria a pena identificar todas as 5 etapas do m\\u00e9todo (aprecia\\u00e7\\u00e3o, diagnose, projeta\\u00e7\\u00e3o, avalia\\u00e7\\u00e3o e valida\\u00e7\\u00e3o, detalhamento), e apontar que apenas as duas primeiras foram cumpridas para este trabalho.","observacao_resultados":"Resultados e Discuss\\u00e3o (8,0)\\r\\n- O texto alocado no subt\\u00f3pico \\"3.3 Projeta\\u00e7\\u00e3o Ergon\\u00f4mica\\", apresenta \\r\\nconte\\u00fados referesntes a \\u00faltima fase da etapa de Diagnose Ergon\\u00f4mica que s\\u00e3o as recomenda\\u00e7\\u00f5es ergon\\u00f4micas (os requisitos).","observacao_contribuicao":"Contribui\\u00e7\\u00e3o para \\u00e1rea de conhecimento (9,0)","observacao_bibliografia":"Bibliografia (10,0)\\r\\n- \\u00f3timo.","observacao_redacao":"Reda\\u00e7\\u00e3o (10,0)\\r\\n- muito bom"},{"professor":8,"nota":8,"observacao_titulo":"","observacao_abstract":"O resumo (e o abstract) encontra-se incompleto, deveria citar rapidamente o m\\u00e9todo utilizado, assim como os reultados obtidos.","observacao_introducao":"Observar pequenas falhas gramaticais.  Talvez  fosse mais interessante, na introdu\\u00e7\\u00e3o, apresentar um panorama geral do artigo, deixando a maior parte das cita\\u00e7\\u00f5es para o referencial te\\u00f3rico.\\r\\nTexto n\\u00e3o justificado corretamente.","observacao_revisaoteorica":"Observar falhas gramaticais (uso de v\\u00edrgulas). ","observacao_metodo":"Poderia ficar mais explicitado os m\\u00e9todos utilizados no estudo.","observacao_resultados":"","observacao_contribuicao":"","observacao_bibliografia":"","observacao_redacao":"Observar falhas gramaticais"}]	\N	9.27
40	Bruno Müller da Silva	brunomuller@live.com	369.759.168-10	14 99147 2946	Faculdade de Arquitetura, Artes e Comunicação, UNESP	/uploads/DesignDeProduto_DesignNoTeatroDeBonecos.pdf	/uploads/comprovante_inter_muller.jpg	Design de Produto	Design no teatro de bonecos como empoderamento de culturas nativas	Bruno Müller da Silva	Cláudio Roberto y Goya	Ger Clancy	Sherra Murphy		Este artigo descreve e analisa o desenvolvimento de um projeto de design aplicado a teatro de bonecos, realizado em intercâmbio na Irlanda, inspirado na história real, hoje folclórica, de Bridget Cleary, uma irlandesa que foi morta em 1895 pelo marido, que acreditava que sua esposa fosse, na verdade, uma fada impostora. Ao analisar os desdobramentos desse trabalho, nos voltamos ao início do desenvolvimento de um segundo projeto, também na área de teatro, mas inspirado nas culturas originárias brasileiras, dando especial enfoque à do povo Guarani Mbya.	2015-09-16 01:41:38	2015-10-13 13:56:28	[{"professor":7,"nota":9,"observacao_titulo":"Resume bem o que \\u00e9 tratado no artigo.\\r\\n(10,0)","observacao_abstract":"Bem escrito, entretanto faltou comentar um pouco a respeito dos resultados obtidos.\\r\\n(9,5)","observacao_introducao":"Sequencial, bem desenvolvida e explicativa. Faltou apenas mencionar o objetivo do trabalho.\\r\\n(9,0)","observacao_revisaoteorica":"Muito bem escrita, no entanto, toda a revis\\u00e3o te\\u00f3rica gira em torno apenas de Bridget Cleary, mas outros temas tamb\\u00e9m poderiam ser abordados como \\"folclore\\" e \\"teatro de bonecos\\" que s\\u00e3o importantes para o artigo.\\r\\n(8,0)","observacao_metodo":"Relato minucioso e bem desenvolvido. Entretanto, os bonecos e a m\\u00e1scara s\\u00e3o resultados, e portanto, ficaria melhor se fossem apresentados na se\\u00e7\\u00e3o seguinte.\\r\\nRenumerar as figuras, pois existem duas figuras de n\\u00famero 2.\\r\\n(9,0)","observacao_resultados":"Nessa se\\u00e7\\u00e3o \\u00e9 interessante que sejam apresentadas imagens com os resultados finais do trabalho, como os bonecos, a m\\u00e1scara e a forma de fixa\\u00e7\\u00e3o da mesma.\\r\\n(9,0)","observacao_contribuicao":"A iniciativa de utilizar o design como meio contribuidor da divulga\\u00e7\\u00e3o de culturas \\u00e9 muito pertinente e versa com a vertente social que muitas vezes tem sido esquecida.\\r\\n(9,0)","observacao_bibliografia":"Grande parte das refer\\u00eancias n\\u00e3o est\\u00e3o citadas no texto.\\r\\n(8,0)","observacao_redacao":"Texto muito bem escrito e desenvolvido.\\r\\n(10,0)"},{"professor":8,"nota":9.2,"observacao_titulo":"","observacao_abstract":"","observacao_introducao":"","observacao_revisaoteorica":"","observacao_metodo":"","observacao_resultados":"Poderia ter sido feita uma discuss\\u00e3o levando em conta estudos e\\/ou resultados semelhantes, de modo a considerar a contribui\\u00e7\\u00e3o dos outros trabalhos, comparando-os a este.","observacao_contribuicao":"","observacao_bibliografia":"","observacao_redacao":""}]	\N	9.10
46	Ana Luísa Nogueira de Lima	ana.luh.nl@gmail.com	44239038812	(12) 988252588	unesp faac	/uploads/DesignInclusivo_Criandoumlivroinfantilparadeficientesvisuais.pdf	/uploads/12030776_1059406597424140_1362418272_n.jpg	Design Inclusivo	Criando um livro infantil para deficientes visuais	Rebeca Nicodemo Candido	Ana Luísa Nogueira de Lima				Este artigo aborda a importância dos livros feitos para crianças com deficiência visual. Esse público-alvo é poueco explorado pelas editoras, embora exista demanda para este tipo de publicação. Atualmente, a maior parte dos livros com esse tipo de direcionamento é feito pelos responsáveis da criança com deficiência, e acabam sendo obras únicas. Os livros sensoriais são feitos de materiais simples que estimulam outros sentidos do leitor, como tato e audição. Fizemos um livro sensorial que complementa essa pesquisa, utilizando na prática as características necessárias para manter a criança interessada na leitura.	2015-09-21 14:59:54	2015-10-13 22:44:52	[{"professor":12,"nota":8.3,"observacao_titulo":"Adequado ao conte\\u00fado do trabalho.","observacao_abstract":"Adequado","observacao_introducao":"Faltam cita\\u00e7\\u00f5es de ano de refer\\u00eancias utilizadas. N\\u00e3o h\\u00e1 a apresenta\\u00e7\\u00e3o do objetivo do trabalho.","observacao_revisaoteorica":"Faltam cita\\u00e7\\u00f5es de ano de refer\\u00eancias utilizadas.","observacao_metodo":"Os m\\u00e9todos descrevem o livro desenvolvido, sendo esta informa\\u00e7\\u00e3o mais relacionada aos resultados.","observacao_resultados":"S\\u00e3o apresentados mais especificamente na parte de m\\u00e9todos. N\\u00e3o h\\u00e1 apresenta\\u00e7\\u00e3o de imagens, o que seria muito importante para melhor entender o  resultado do trabalho. Tampouco h\\u00e1 discuss\\u00e3o dos resultados com a literatura.","observacao_contribuicao":"O trabalho apresenta um tema relevante e atual, e \\u00e9 de interesse para a \\u00e1rea do Design Inclusivo.","observacao_bibliografia":"Necessita de adequa\\u00e7\\u00e3o das refer\\u00eancias e cita\\u00e7\\u00f5es no texto.","observacao_redacao":"O texto \\u00e9, em geral, bem escrito, possui  alguns equ\\u00edvocos de escrita."},{"professor":10,"nota":5,"observacao_titulo":"","observacao_abstract":"","observacao_introducao":"C\\u00e2ndido e Bettelheim n\\u00e3o est\\u00e3o listados nas refer\\u00eancias bibliogr\\u00e1ficas, assim como Bandura, Grifin e Gerber.\\r\\n","observacao_revisaoteorica":"Muitos autores n\\u00e3o foram citados corretamente en\\u00e3o constam das refer\\u00eancias ao final.\\r\\n5","observacao_metodo":"H\\u00e1 uma confus\\u00e3o sobre o que deve constar do t\\u00f3pico \\"m\\u00e9todo\\"","observacao_resultados":"N\\u00e3o fica claro se o livro foi mesmo confeccionado e posto \\u00e0 prova.\\r\\n","observacao_contribuicao":"Precisa aprofundar o estudo te\\u00f3rico e relatar os resultados alcan\\u00e7ados ao expor as pessoas com defici\\u00eancia visual ao produto para saber se h\\u00e1 alguma contribui\\u00e7\\u00e3o.\\r\\n0","observacao_bibliografia":"Muitos autores citados no texto n\\u00e3o constam das refer\\u00eancias. E um dos autores da lista n\\u00e3o \\u00e9 mencionado no texto.","observacao_redacao":"O texto est\\u00e1 fora dos padr\\u00f5es de um texto cient\\u00edfico, principalmente quanto \\u00e0s refer\\u00eancias de outros autores. \\u00c9 preciso rever por completo o  t\\u00f3pico sobre metodologia. Os resultados est\\u00e3o confusos sobre o que \\u00e9 conceito, o que foi feito e o que \\u00e9 projeto.  Entendo que na gradua\\u00e7\\u00e3o muitos s\\u00e3o inexperientes, gostaria de dar um incentivo, mas infelizmente  o texto n\\u00e3o tem o necess\\u00e1rio para ser considerado cient\\u00edfico. Vou manter a m\\u00e9dia 5 pelo esfor\\u00e7o de enviar."}]	\N	6.65
49	Juliano  Amaral  Carvalho	carvalhojdesign@gmail.com	374.264.938-81	(18) 99766-4067 / (14) 3245-7629	UNESP	/uploads/DesignInclusivo_AsCorrelaçõesEntreODesign,BiomecânicaEUsuárioDaCadeiradeRodasManuais_UmEstudoDeRevisão.pdf	/uploads/comprovante.jpeg	Design Inclusivo	As Correlações Entre o Design, Biomecânica e Usuário da Cadeira de Rodas Manuais: Um Estudo de Revisão	Juliano Amaral Carvalho	Galdenoro Botura Jr				A lesão medular gera a deficiências físicas afetando a vida de pessoas que, na maioria das vezes, passam a utilizar  cadeira de rodas para se locomoverem,  o que exige  demasiado esforço dos  seus membros superiores.  A propulsão para cadeira de rodas é um movimento complexo que envolve uma interface homem­máquina e forças repetitivas,  sendo que as  a lesões no ombro estão relacionados momentos ocorridos nos membros superiores. Conclui-se que há correlação entre aspectos de design na biomecânica em cadeira de rodas manuais e que os usuários ainda sentem dor e dificuldade ao utiliza-la. 	2015-09-21 20:39:49	2015-10-14 14:10:52	[{"professor":10,"nota":9.5,"observacao_titulo":"ok","observacao_abstract":"O resumo precisa ser revisto, pois tem alguns erros de concord\\u00e2ncia. Consequentemente o abstract precisa ser revisto.","observacao_introducao":"Trabalhos de revis\\u00e3o costumam ser muito abrangentes, como o pr\\u00f3prio t\\u00edtulo sugere, as correla\\u00e7\\u00f5es pode ser in\\u00fameras. Como sugest\\u00e3o, talvez a introdu\\u00e7\\u00e3o deva deixar claro que o assunto est\\u00e1 delimitado a quest\\u00e3o da dor. Refor\\u00e7o que isso \\u00e9 apenas uma sugest\\u00e3o.","observacao_revisaoteorica":"ok","observacao_metodo":"Por ser trabalho de revis\\u00e3o, n\\u00e3o h\\u00e1 necessidade de detalhar o m\\u00e9todo, entretanto, pode ser \\u00fatil demonstrar quais crit\\u00e9rios foram adotados na escolha das fontes de consulta.","observacao_resultados":"ok","observacao_contribuicao":"O presente artigo pode ser um ponto de partida para outras pesquisas, por apontar diversos estudos na \\u00e1rea.","observacao_bibliografia":"ok","observacao_redacao":"revisar resumo e abstract"},{"professor":12,"nota":8,"observacao_titulo":"Adequado","observacao_abstract":"Pouco ilustrativo do conte\\u00fado do texto.","observacao_introducao":"Adequada","observacao_revisaoteorica":"H\\u00e1 um levantamento bibliogr\\u00e1fico relacionado ao tema, por\\u00e9m falta um pouco de sequ\\u00eancia dos temas abordados e de conex\\u00e3o no conte\\u00fado dos par\\u00e1grafos.","observacao_metodo":"Levantamento e discuss\\u00e3o de artigos referente ao tema do estudo. Os autores, basicamente, apresentam informa\\u00e7\\u00f5es e resultados de outros trabalhos.","observacao_resultados":"Apesar do levantamento bibilogr\\u00e1fico e das informa\\u00e7\\u00f5es presentes no texto, h\\u00e1 pouca discuss\\u00e3o no sentido de analisar todas as informa\\u00e7\\u00f5es apresentadas e levantar conclus\\u00f5es, o que \\u00e9 importante para dar originalidade ao trabalho e, desta forma, que este traga contribui\\u00e7\\u00f5es \\u00e0 \\u00e1rea de pesquisa e conhecimento.","observacao_contribuicao":"As informa\\u00e7\\u00f5es apresentadas s\\u00e3o relevantes para a \\u00e1rea do conhecimento. O estudo poderia ter discutido mais as informa\\u00e7\\u00f5es e, desta forma, trazer contribui\\u00e7\\u00f5es originais \\u00e0 \\u00e1rea.","observacao_bibliografia":"Adequada","observacao_redacao":"No texto existem alguns erros de pontua\\u00e7\\u00e3o (ou falta desta), al\\u00e9m da necessidade de adequa\\u00e7\\u00e3o de algumas cita\\u00e7\\u00f5es."}]	\N	8.75
38	Danielle Naomi Nakatsu	daninaomi93@hotmail.com	383861618-92	11964535863	UNESP	/uploads/FundamentosTeóricos_MulhereCinemaMapeamentoDaRepresentaçãoFemininaNosFilmesPremiadosNoGloboDeOuro.pdf	/uploads/comprovante pagamento.jpg	Fundamentos Teóricos	mapeamento da representação feminina nos filmes premiados no Globo de Ouro 	Danielle Naomi Nakatsu	Guilherme Cardoso Contini				O acesso à informação é uma importante ferramenta de “empoderamento” social, ou seja, o conhecimento se torna agente de fortalecimento da conscientização do cidadão sobre sua capacidade de participação dentro da sociedade. Nesse sentido, o designer pode contribuir para tornar a informação mais acessível e instigante para a população. Desta forma, esta pesquisa explora o caráter imagético e histórico dos movimentos feministas que notavelmente modificaram o papel da mulher nas mídias de massa, debruçando-se especificamente sobre os três últimos filmes premiados pelo Golden Globe Awards: Boyhood (2014), 12 Anos de Escravidão (2013) e Argo (2012), analisando-os qualitativa e quantitativamente.	2015-09-16 01:26:39	2015-10-15 19:52:05	[{"professor":6,"nota":5.67,"observacao_titulo":"O t\\u00edtulo est\\u00e1 adequado ao assunto abordado no artigo. Nota: 10,0","observacao_abstract":"O resumo tamb\\u00e9m \\u00e9 adequado ao teor do artigo. Nota: 9,0","observacao_introducao":"Apesar de estar bem redigida, n\\u00e3o consigo ver de fato o papel do designer no tema. Nota: 5,0","observacao_revisaoteorica":"A revis\\u00e3o te\\u00f3rica me parece adequada para um trabalho de antropologia, mas n\\u00e3o de design. Nota: 5,0","observacao_metodo":"Os m\\u00e9todos est\\u00e3o adequados. Nota: 7,0","observacao_resultados":"Os resultados s\\u00e3o parciais, e talvez no final a relev\\u00e2ncia do designer apare\\u00e7a. Nota: 5,0","observacao_contribuicao":"Nenhuma. Nota: 0,0","observacao_bibliografia":"Em 21 t\\u00edtulos que constam da bibliografia, apenas 2 s\\u00e3o de design. Nota: 3,0","observacao_redacao":"O artigo est\\u00e1 bem redigido. Nota: 7,0"},{"professor":13,"nota":9,"observacao_titulo":"Adequado. ","observacao_abstract":"Resume de forma objetiva do que o artigo vai tratar. O abstract merece revis\\u00e3o de tradu\\u00e7\\u00e3o. Por\\u00e9m, as palavras chave merecem alguma revis\\u00e3o. N\\u00e3o h\\u00e1 \\u00eanfase em Design Social e nem em M\\u00eddia de Massa (ambos os conceitos n\\u00e3o s\\u00e3o contemplados adequadamente ao longo do artigo). ","observacao_introducao":"Trata corretamente dos pontos a serem desenvolvidos e contextualiza as tem\\u00e1ticas. Ao final, poderia ter dispensado a \\"quase identifica\\u00e7\\u00e3o\\"  de autoria. ","observacao_revisaoteorica":"As fontes s\\u00e3o confi\\u00e1veis, adequadas e corretamente inseridas. Por\\u00e9m, h\\u00e1 pequenas falhas na indica\\u00e7\\u00e3o das mesmas ( n\\u00famero da p\\u00e1gina das cita\\u00e7\\u00f5es diretas, por exemplo). ","observacao_metodo":"Ferramentas corretas ao que se prop\\u00f5em. ","observacao_resultados":"Apura\\u00e7\\u00e3o de resultados corretamente realizada. Prop\\u00f5e discuss\\u00f5es em Design. ","observacao_contribuicao":"Tem\\u00e1tica que desperta interesse e \\u00e9 relevante. ","observacao_bibliografia":"Apresentada de forma correta. Atualizada. ","observacao_redacao":"Com alguns pequenos detalhes para ajuste quanto \\u00e0 apresenta\\u00e7\\u00e3o das cita\\u00e7\\u00f5es. "},{"professor":16,"nota":8.5,"observacao_titulo":"adequado","observacao_abstract":"adequado","observacao_introducao":"adequada","observacao_revisaoteorica":"pouco curta","observacao_metodo":"O m\\u00e9todo foi testado . interessante, mas necessita de ajustes","observacao_resultados":"A amostra pareceu pequena para resultados mais contundentes","observacao_contribuicao":"de interesse","observacao_bibliografia":"Adequada","observacao_redacao":"Boa"}]	\N	8.43
50	Caique Guerra de Oliveira	caique_guerra@outlook.com	39137033816	11 982367854	UNESP	/uploads/materiaiseprocessos_adornoscorporaisemmadeiradobradaeexperimentacoescommateriaiscomplementares.pdf	/uploads/comprovante.jpg	Materiais e processo	Adornos corporais em madeira dobrada e experimentações com materiais complementares	Caique Guerra de Oliveira	Gabriela Moraes Montoro				Sempre presente nas diversas culturas humanas, o adorno tem grande relevância social. Em tempos contemporâneos, buscamos alternativas sustentáveis à produção de joalharia tradicional. Vemos a madeira como uma solução pois é um material que atinge este requisito bem como a durabilidade exigida de uma joia. Este estudo tem como objetivo testar uma técnica de dobra e colagem de finas camadas de madeira, com o intuito de reduzir desperdício de material sem perder resistência estrutural devido a sua espessura. Também buscamos uma estética semelhante à porcelana com o uso de materiais alternativos.	2015-09-21 22:11:23	2015-10-16 04:40:45	[{"professor":1,"nota":0,"observacao_titulo":"teste","observacao_abstract":"teste","observacao_introducao":"teste","observacao_revisaoteorica":"teste","observacao_metodo":"teste","observacao_resultados":"teste","observacao_contribuicao":"teste","observacao_bibliografia":"teste","observacao_redacao":"teste"}]	\N	0.00
37	BRUNO MORGUES ATTUY	bruno_morgues@hotmail.com	37387474869	14996944923	USC	/uploads/DesignGrafico_OUsoDaTécnicaDeGridComoFormaDeConfiguraçãoVisualEmMarcas-CasoDaMarcaPIB.pdf	/uploads/taxasubmissao.jpg	Design Gráfico	O uso da técnica de grid como forma de configuração visual em marcas - Caso da marca PIB 	Bruno Morgues Attuy	João Carlos Riccó Plácido Silva				A imagem corporativa de uma instituição se cria através de todos os seus elementos de comunicação com o público. Isso inclui sua apresentação física e arquitetônica, a apresentação e a qualidade de suas mensagens e serviços, e todas as suas manifestações gráficas, ou seja, marca, logotipo, tipografia e cores em todas as aplicações. A utilização de grid aumenta a precisão de layout, os elementos ficam melhor organizados, além de simplificar o processo de criação, estruturação e agilidade na produção. O presente trabalho demonstra o desenvolvimento de uma marca atraves de técnicas como o Grid para correção das proporções e configuração visual do projeto. Tendo presente uma revisão dos itens que cercam este projetos e todo o metodo de desenvolvimento por etapas, presente tambem o manual de aplicação da mesma. 	2015-09-16 01:26:01	2015-10-16 06:56:48	[{"professor":16,"nota":8,"observacao_titulo":"regular","observacao_abstract":"um pouco confuso, falta mais clareza","observacao_introducao":"pouco mais clara","observacao_revisaoteorica":"adequada","observacao_metodo":"adequados","observacao_resultados":"bem apresentados","observacao_contribuicao":"Boa contribui\\u00e7\\u00e3o, apesar de n\\u00e3o haver originalidade enquanto metodologias","observacao_bibliografia":"adequada e atualizada","observacao_redacao":"boa"},{"professor":16,"nota":8,"observacao_titulo":"regular","observacao_abstract":"um pouco confuso, falta mais clareza","observacao_introducao":"pouco mais clara","observacao_revisaoteorica":"adequada","observacao_metodo":"adequados","observacao_resultados":"bem apresentados","observacao_contribuicao":"Boa contribui\\u00e7\\u00e3o, apesar de n\\u00e3o haver originalidade enquanto metodologias","observacao_bibliografia":"adequada e atualizada","observacao_redacao":"boa"},{"professor":17,"nota":6.5,"observacao_titulo":"COMENT\\u00c1RIO GERAL: Apresenta erros gramaticais e de digita\\u00e7\\u00f5es. Os conte\\u00fados est\\u00e3o adequados por\\u00e9m falta estabelecer conex\\u00f5es entre eles. O logotipo, objeto de estudo, apresenta inconsist\\u00eancias.","observacao_abstract":"","observacao_introducao":"","observacao_revisaoteorica":"","observacao_metodo":"","observacao_resultados":"","observacao_contribuicao":"","observacao_bibliografia":"","observacao_redacao":""}]	\N	7.50
51	José Benedito Vieira Luz	jobeviluz@hotmail.com	392.819.858-02	(12) 3112-3257	Faculdades Integradas Teresa D'Ávila	/uploads/designgrafico_resultadoparcialdeconcepçãodelivroinfantilmodelocomaplicacaodosconceitosdedesignthinkingeux.pdf	/uploads/img070.jpg	Design Gráfico	Resultado Parcial de concepção de livro infantil modelo com aplicação dos conceitos de Design Thinking e UX	José Benedito Vieira Luz	Talita Kathleen Correia de Sousa	Marcus Vinícius Monteiro Gonçalves			O presente artigo visa mostrar o processo de desenvolvimento parcial de um livro modelo voltado ao público infantil. Utilizando os conceitos de UX e Design Thinking buscou-se analisar a efetividade do produto junto a seus consumidores e o desempenho do mercado editorial brasileiro. Bem como a mostrar a primeira etapa do processo onde foi feia uma emersão com crianças do Projeto Espaço Alternativo em Aparecida, São Paulo.	2015-09-22 00:18:11	2015-10-16 06:57:24	[{"professor":16,"nota":6.5,"observacao_titulo":"Longo e pouco estimulante (o termo resultado parcial desvaloriza um pouco o trabalho)","observacao_abstract":"pouco claro","observacao_introducao":"pouco clara","observacao_revisaoteorica":"Coerente","observacao_metodo":"pouco claros","observacao_resultados":"A pesquisa \\u00e9 parcial, como o nome diz, por\\u00e9m, n\\u00e3o fica claro quais ser\\u00e3o os passos seguintes e como se dar\\u00e1 a real aplica\\u00e7\\u00e3o dos temas tratados: design thinking e UX.","observacao_contribuicao":"parcial","observacao_bibliografia":"Ok","observacao_redacao":"Regular. As fotos n\\u00e3o trazem fonte, n\\u00e3o fica claro se s\\u00e3o do autor ou dos livros citados."},{"professor":17,"nota":5,"observacao_titulo":"COMENT\\u00c1RIO GERAL: O tema \\u00e9 interessante e com muito potencial para gerar bom trabalho. O artigo apresenta v\\u00e1rios erros gramaticais, estruturais e de digita\\u00e7\\u00f5es. Algumas cita\\u00e7\\u00f5es n\\u00e3o comparecem nas Refer\\u00eancias Bibliogr\\u00e1ficas como Norman (2008), Garret (2002), Desmet (2007) entre outros. N\\u00e3o apresenta fontes nas figuras.","observacao_abstract":"","observacao_introducao":"","observacao_revisaoteorica":"","observacao_metodo":"","observacao_resultados":"","observacao_contribuicao":"","observacao_bibliografia":"","observacao_redacao":""}]	\N	5.75
35	Taty Any Mizoguchi Trabachini	ta_trabachini@yahoo.com.br	430.774.368-76	(11) 97084-2665	UNESP	/uploads/Comunicação Visual_A importância dos aspectos ergonômicos no design de embalagens - Uma análise através da Ergonomia Informacional.pdf	/uploads/depósito Taty.png	Comunicação Visual	A importância dos aspectos ergonômicos no design de embalagens: Uma análise através da Ergonomia Informacional	Taty Any Mizoguchi Trabachini	João Carlos Riccó Plácido da Silva	Luis Carlos Paschoarelli			O setor de embalagens passou por muitas mudanças ao longo do tempo. Atualmente, diante de um mercado cada vez mais competitivo, o mesmo pode ser considerado um dos fatores decisivos na venda de produtos. O artigo enfatiza a importância da ergonomia no desenvolvimento de embalagens, tanto na parte estrutural quanto em sua identidade visual, e o quanto essa questão pode influenciar a preferência dos usuários. A pesquisa visa avaliar um determinado segmento de marcas existentes no mercado, possibilitando uma discussão de como as mesmas estão sendo dispostas aos usuários e como elas se relacionam com as questões da ergonomia informacional. 	2015-09-16 01:23:18	2015-10-16 06:51:55	[{"professor":14,"nota":9,"observacao_titulo":"ok. Bom t\\u00edtulo.","observacao_abstract":"\\u00f3timo.","observacao_introducao":"Cita\\u00e7\\u00f5es diretas na introdu\\u00e7\\u00e3o devem conter a p\\u00e1gina da cita\\u00e7\\u00e3o (obra referenciada). A embalagem \\u00e9 uma ferramenta de marketing, sendo que nos produtos de consumo \\u00e9 tamb\\u00e9m um instrumento de comunica\\u00e7\\u00e3o e vendas. Na maioria dos casos, ela \\u00e9 a\\r\\n\\u00fanica forma de comunica\\u00e7\\u00e3o que o produto disp\\u00f5e, uma vez que grande maioria dos produtos expostos em supermercados n\\u00e3o tem qualquer apoio de comunica\\u00e7\\u00e3o ou\\r\\npropaganda (MESTRINER, 2001, p. XX).\\r\\n\\u201cA embalagem \\u00e9 considerada uma forte arma estrat\\u00e9gica para as empresas, auxilia no processo comunicacional com os seus clientes e guarnecem prote\\u00e7\\u00e3o, seguran\\u00e7a e armazenamento corretos\\u201d (SILVA, 2005. p. XX). ","observacao_revisaoteorica":"No corpo do texto da revis\\u00e3o tamb\\u00e9m existem cita\\u00e7\\u00f5es diretas sem a especifica\\u00e7\\u00e3o da p\\u00e1gina. Exemplo: (MARTINS E\\r\\nMORAES, 2002, p. XX),  (MILTON, 1991, p. XX), (MESTRINER, 2001, p. XX), (GOMES FILHO, 2000, p. XX), (DONDIS, 1997, p. XX),  \\r\\n","observacao_metodo":"ok.","observacao_resultados":"Tamb\\u00e9m contem cita\\u00e7\\u00f5es diretas sem n\\u00famero de p\\u00e1gina.\\r\\nTrechos confusos (pouco claros): \\"Abrange o alcance deste produto, que pode auxiliar a quantidade de elementos e preocupa\\u00e7\\u00f5es existentes com rela\\u00e7\\u00e3o a cultura do local que este elemento ser\\u00e1 aplicado, na marca original consta a presen\\u00e7a dos elementos utilizados no projeto analisado, como por exemplo a exist\\u00eancia do s\\u00edmbolo ou n\\u00e3o em uma marca. As dimens\\u00f5es s\\u00e3o tratadas de acordo com os espa\\u00e7os contidos entre os elementos al\\u00e9m de um calculo de media e moda do conjunto na busca de uma rela\\u00e7\\u00e3o \\u00e1urea\\" e este tamb\\u00e9m: \\" sendo estes visibilidade, leiturabilidade e legibilidade a apenas este\\r\\nelemento que em alguns casos \\u00e9 o projeto como um todo\\"","observacao_contribuicao":"A revel\\u00e2ncia (contribui\\u00e7\\u00e3o) aparece na forma (fichas de avalia\\u00e7\\u00e3o)","observacao_bibliografia":"ok","observacao_redacao":"ok"},{"professor":4,"nota":8.5,"observacao_titulo":"","observacao_abstract":"","observacao_introducao":"","observacao_revisaoteorica":"","observacao_metodo":"","observacao_resultados":"","observacao_contribuicao":"","observacao_bibliografia":"","observacao_redacao":""},{"professor":4,"nota":8.5,"observacao_titulo":"","observacao_abstract":"","observacao_introducao":"","observacao_revisaoteorica":"","observacao_metodo":"","observacao_resultados":"","observacao_contribuicao":"","observacao_bibliografia":"","observacao_redacao":""},{"professor":4,"nota":10,"observacao_titulo":"","observacao_abstract":"","observacao_introducao":"","observacao_revisaoteorica":"","observacao_metodo":"","observacao_resultados":"","observacao_contribuicao":"","observacao_bibliografia":"","observacao_redacao":""},{"professor":4,"nota":8.3,"observacao_titulo":"10","observacao_abstract":"9,0","observacao_introducao":"8,0","observacao_revisaoteorica":"9,0","observacao_metodo":"8,0","observacao_resultados":"8,0","observacao_contribuicao":"7,0","observacao_bibliografia":"8,0","observacao_redacao":"8,0"},{"professor":16,"nota":9,"observacao_titulo":"\\u00d3timo","observacao_abstract":"bom","observacao_introducao":"boa, por\\u00e9m n\\u00e3o introduz a pesquisa claramente","observacao_revisaoteorica":"boa, concisa mas completa","observacao_metodo":"bem estruturados","observacao_resultados":"S\\u00e3o parciais, mas est\\u00e3o bem apresentados","observacao_contribuicao":"Boa - \\u00e1rea de embalagens ainda carece de estudos","observacao_bibliografia":"Adequada, mas faltou mais textos atuais","observacao_redacao":"Boa. Texto claro de forma geral."},{"professor":17,"nota":8.5,"observacao_titulo":"COMENT\\u00c1RIO GERAL: Trata-se de um relevante artigo. Os itens analisados s\\u00e3o apresentados de forma coerentes e muito bem equilibrados.","observacao_abstract":"","observacao_introducao":"","observacao_revisaoteorica":"","observacao_metodo":"","observacao_resultados":"","observacao_contribuicao":"","observacao_bibliografia":"","observacao_redacao":""}]	\N	8.83
57	Cahenna Salles Othon Teixeira	ka.ichi@hotmail.com	41970166894	17981742733	Universidade Estadual Paulista	/uploads/Comunicação Visual_VISUAL-KEI CULTURA VISUAL E IMPACTO INTERCULTURAL.pdf	/uploads/comprovante.pdf	Comunicação Visual	Visual-kei : Cultura Visual e Impacto Intercultural	Cahenna Salles Othon Teixera					O Visual Kei teve como auge os anos 90, no ocidente nos anos 2000 e na América do Sul o estilo ganha força no ano de 2005 .É um movimento musical que mistura variantes do rock japonês. De origem underground, o estilo prova hoje de um "boom" internacional. O artigo pretende demonstrar o modo que a carga intercultural trabalha na composição de ideais estéticos e psicológicos nos adeptos do estilo no Brasil.	2015-09-22 23:54:50	2015-10-16 06:53:48	[{"professor":14,"nota":5,"observacao_titulo":"\\u00f3timo","observacao_abstract":"resumo e abstract est\\u00e3o com alinhamento centralizado.","observacao_introducao":"Corrigir texto: Foi realizada coleta de dados foi realizada a partir de observa\\u00e7\\u00f5es pr\\u00e9vias e aplica\\u00e7\\u00e3o e question\\u00e1rio, direcionado com base te\\u00f3rica de acordo com Labes (1998. \\r\\nFechar o parenteses e essa informa\\u00e7\\u00e3o deve constar em m\\u00e9todos.","observacao_revisaoteorica":"N\\u00e3o explica a base te\\u00f3rica de acordo com Labes (1998).\\r\\nVisual-kei: vertentes e expans\\u00e3o\\r\\nFala basicamente do contexto hist\\u00f3rico e n\\u00e3o apresenta cita\\u00e7\\u00f5es. Qual \\u00e9 a fonte da informa\\u00e7\\u00e3o? Tamb\\u00e9m n\\u00e3o existe fonte de informa\\u00e7\\u00e3o das figuras.","observacao_metodo":"ok","observacao_resultados":"Fala dos gr\\u00e1ficos, mas os mesmos n\\u00e3o foram apresentados.","observacao_contribuicao":"Pouca","observacao_bibliografia":"pobre: basicamente dois livros e o resto informa\\u00e7\\u00f5es da internet.","observacao_redacao":"mediana"},{"professor":16,"nota":6,"observacao_titulo":"bom","observacao_abstract":"muito resumido, acaba pouco claro","observacao_introducao":"Ok","observacao_revisaoteorica":"\\u00c9 mais um apanhado hist\\u00f3rico","observacao_metodo":"H\\u00e1 descri\\u00e7\\u00e3o de um m\\u00e9todo para parte da pesquisa. Parte mais consistente do trabalho","observacao_resultados":"H\\u00e1 resultados de uma pesquisa realizada. ","observacao_contribuicao":"O assunto pode ser interessante em v\\u00e1rias \\u00e1reas do design. Mas esse ponto foi pouco explorado no artigo. Design n\\u00e3o e citado. ","observacao_bibliografia":"bem espec\\u00edfica. ","observacao_redacao":"Bem ruim, algumas frases s\\u00e3o completamente sem sentido."},{"professor":17,"nota":7.5,"observacao_titulo":"COMENT\\u00c1RIO GERAL: As discuss\\u00f5es se apoiam em cita\\u00e7\\u00f5es de gr\\u00e1ficos que n\\u00e3o comparecem no artigo, comprometendo esclarecer este conte\\u00fado. J\\u00e1 os resultados apresentados s\\u00e3o muito interessantes e conclusivos. Sugest\\u00e3o para uma revis\\u00e3o de digita\\u00e7\\u00e3o.","observacao_abstract":"","observacao_introducao":"","observacao_revisaoteorica":"","observacao_metodo":"","observacao_resultados":"","observacao_contribuicao":"","observacao_bibliografia":"","observacao_redacao":""}]	\N	6.17
42	Michel Silvestre de Souza	michel_silvestre@msn.com	353.728.708-93	(18) 9 9757-4978	Unesp	/uploads/designgrafico_SoftwareTridimensionalFreewarecomoNovoMetodonoEnsinodeGeometriaDescritiva.pdf	/uploads/comprovante pagto.jpg	Design Gráfico	Software Tridimensional Freeware como Novo Método no Ensino de Geometria Descritiva	Michel Silvestre de Souza	Roberto Alcarria do Nascimento	Maria Antonia Benutti			Este trabalho tem como objetivo apresentar uma ferramenta na aprendizagem de geometria descritiva, desenvolvendo a visão espacial que é o grande objetivo destas disciplinas e a grande dificuldade dos alunos. Muitos softwares de modelagem tridimensional, educacionais e freeware são inseridos no ensino gráfico, e cada vez mais acessíveis aos estudantes. O SketchUp, é um programa que facilita o entendimento da visualização tridimensional juntamente com o método tradicional de ensino. Procurou-se identificar as vantagens e desvantagens do CAD e do SketchUp no ensino. A G.D. desenvolve a habilidade da percepção espacial, e a tecnologia se mostra uma ferramenta útil no ensino.	2015-09-16 02:15:58	2015-10-16 06:55:38	[{"professor":16,"nota":9,"observacao_titulo":"adequado","observacao_abstract":"claro","observacao_introducao":"clara","observacao_revisaoteorica":"muito boa, bem ilustrada","observacao_metodo":"adequados","observacao_resultados":"adequados","observacao_contribuicao":"apesar de ser um artigo bem espec\\u00edfico, est\\u00e1 diretamente relacionado ao ensino em design.","observacao_bibliografia":"adequada","observacao_redacao":"muito boa"},{"professor":17,"nota":8.5,"observacao_titulo":"COMENT\\u00c1RIO GERAL: \\u00c9 um bom artigo. Traz boas contribui\\u00e7\\u00f5es para a metodologia de Ensino na \\u00e1rea de Geometria Descritiva. Apresenta um bom texto e com resultados que atende aos objetivos propostos.","observacao_abstract":"","observacao_introducao":"","observacao_revisaoteorica":"","observacao_metodo":"","observacao_resultados":"","observacao_contribuicao":"","observacao_bibliografia":"","observacao_redacao":""}]	\N	8.75
\.


--
-- Data for Name: InscritoSimposioGeral; Type: TABLE DATA; Schema: public; Owner: pgadmin
--

COPY "InscritoSimposioGeral" (id, nome, rg, cpf, dob, email, telefone, facebook, contatoemergencia, telefoneemergencia, cidadeestado, instituicao_de_origem, curso, anotermo, outrocongresso, comprovante, artigo, tituloartigo, created_at, updated_at) FROM stdin;
1	Renata Svizzero Fakhoury	46958186-4	384882478-77	10/12/1989	refakhoury@hotmail.com	(14)99797-8979	https://www.facebook.com/renata.svizzerofakhoury	Eduardo Fakhoury	(14) 99745-4767	\N	UNIP	Arquitetura e Urbanismo / CAU: A96464-6	2012	Não	/uploads/InscriçaoRenataFakhoury.pdf	t	Emoção: do Advento do Movimento Pós-Moderno ao Mundo Tecnológico Atual	2015-09-07 17:22:12	2015-09-07 17:22:12
2	Heloísa Maria de Macedo Silva 	002.770.347	079.995.174-96	28/08/1994	heloisamacedo@outlook.com	83 9 9939 4550	Fb.com/heloisammacedo	Islafd 		\N					\N	f		2015-09-15 18:53:42	2015-09-15 18:53:42
3	Danielle Naomi Nakatsu	39101647-7	383861618-92	25/05/1993	daninaomi93@gmail.com	11964535863	www.facebook.com/daninaomii	Sergio Nakatsu	11998784264	\N					\N	f		2015-09-15 19:57:40	2015-09-15 19:57:40
4	Danielle Naomi Nakatsu	39101647-7	383861618-92	25/05/1993	daninaomi93@gmail.com	11964535863	www.facebook.com/daninaomii	Sergio Nakatsu	11998784264	\N					\N	f		2015-09-15 19:57:45	2015-09-15 19:57:45
5	Danielle Naomi Nakatsu	39101647-7	383861618-92	25/05/1993	daninaomi93@gmail.com	11964535863	www.facebook.com/daninaomii	Sergio Nakatsu	11998784264	\N					\N	f		2015-09-15 19:57:50	2015-09-15 19:57:50
6	Nilton Henrique Peccioli Filho	12386267	167.438.018-60	08/12/1974	nhpf@uol.com.br	14-98144-0598	https://www.facebook.com/niltonhenrique.pecciolifilho			\N	Anhembi Morumbi	Mestre em Hospitalidade	Aluno especial do Programa de Pós-graduação em Design da UNESP	Não	/uploads/comprova pagamento submissão e inscrição.pdf	t	DESIGN PARA INOVAÇÃO SOCIAL E PERTENCIMENTO: UM OLHAR PARA A COMIDA DE RUA DA CIDADE DE BAURU NA PRAÇA DA PAZ	2015-09-16 00:22:48	2015-09-16 00:22:48
7	Thiago Stefanin	403966942	36350952812	12/01/1987	thiago_stefanin@hotmail.com	14 99818 0136	Thiago Stefanin	Mariana A Santos	14 99686 0277	\N	UNESP - DARG	Artes Visuais - Licenciatura	7	de desing não apenas artes	/uploads/12042144_10206349408871649_1549561514_n.jpg	t	ESPAÇOS DE EDUCAÇÃO SUSTENTÁVEIS	2015-09-21 21:37:02	2015-09-21 21:37:02
8	KERONLY ROSA WERNECK	41.340.205-8	352.499.458-05	09/08/1988	krwerneck@gmail.com	(14) 99608-2631	facebook.com/keronly.werneck	Pedro Ryô de Landim y Goya	(14) 98122-7222	Bauru, São Paulo	FAAC UNESP - Campus Bauru	Programa de Pós Graduação em Arquitetura e Urbanismo	Aluna especial - 2º Semestre de 2015	Não	/uploads/PAGAMENTO - INTERDESIGNERS.JPG	f		2015-09-27 13:43:22	2015-09-27 13:43:22
9	Liara Mucio de Mattos	415743795	36805095883	02/02/1987	liaramattos@gmail.com		Liara Mattos			Bauru	FAAC/UNESP	Mestrado em Design	1º ano		\N	f		2015-10-19 11:56:19	2015-10-19 11:56:19
10	Taty Any Mizoguchi Trabachini	46.345.431-5	430.774.368-76	03/08/1994	ta_trabachini@yahoo.com.br	(11) 97084-2665	https://www.facebook.com/tatytrabachini	Laercio Trabachini	(11) 99258-2690	Guarulhos - SP	UNESP (Campus de Bauru)	Design de Produto	3º ano/ 6º termo	Não	/uploads/IMG_2139.JPG	t	A Importância dos Aspectos Ergonômicos no Design de Embalagens - Uma Análise através da Ergonomia Informacional	2015-10-20 00:59:11	2015-10-20 00:59:11
11	MICHEL SILVESTRE DE SOUZA	40.262.271-4	353.728.708-93	12/04/1988	michel_silvestre@msn.com	018 997574978	https://www.facebook.com/michel.silvestre.3	Michela	018 997665979	Araçatuba, São Paulo	Fateb - Faculdade de Ciências e Tecnologia de Birigui	DESENHO INDUSTRIAL - PROJETO DE PRODUTO	Concluido	Sim, o 1º Simpósio Interdesigner	/uploads/comprovante.jpg	t	Software Tridimensional Freeware como Novo Método no Ensino de Geometria Descritiva	2015-10-20 02:08:29	2015-10-20 02:08:29
12	Brenda Maria Saes Palma	13.087.961-6	087.677.379-00	22/02/1995	bresaesp@hotmail.com	(44) 8408-6754	https://www.facebook.com/brendasaes	José Carlos de Souza Palma  (Pai)	(44) 3245-5584 (44) 8452-2066 (44) 3245-4753	Cianorte - Paraná	Universidade Estadual de Maringá - UEM	Design/Produto	Frequentando de 2013 - 2016	Sim. XXIV EAIC - Encontro Anual de Iniciação Científica.	/uploads/12170292_905799919503170_1537096696_n.jpg	t	Análise Semântica do Mobiliário Litúrgico em Igrejas Católicas - Um Estudo de Caso	2015-10-20 15:05:56	2015-10-20 15:05:56
13	Talita Kathleen Correia de Sousa	400809862	42972636880	04/07/1995	talitakathleen@gmail.com	12996328069	https://www.facebook.com/talitakathleen	Maria do Carmo Fernandes	1236462367	Roseira, São Paulo	Faculdades Integradas Teresa D'Ávila - FATEA	Design	3º Ano	Sim, P&D Gramado 2014	/uploads/img136.jpg	t	Projeto Gráfico de um livro infantil utilizando os conceitos de User Experience e Design Thinking	2015-10-20 21:06:26	2015-10-20 21:06:26
14	Heloísa Maria de Macedo Silva	002.770.347	079.995.174-96	28/08/1994	heloisamacedo@outlook.com	83999394550	heloisammacedo	Islard rocha	83998340141	Rio Tinto - PB	Universidade Federal da Paraíba	Design	8º período	Não	/uploads/12170583_10206239576486524_331068413_n.jpg	t	Meninos de rio: arte e design social na escola	2015-10-21 01:58:36	2015-10-21 01:58:36
15	Bruno Müller da Silva	431278374	36975916810	21/11/1988	brunomuller@live.com	14991472946	facebook.com/brn.muller	Ana Müller	14 991679752	Bauru  - SP	Faculdade de Arquitetura, Artes e Comunicação / UNESP	Design / Produto	4º ano/ 8º termo		/uploads/comprovante_simposio_muller.jpg	t	Design no teatro de bonecos como meio de empoderamento de culturas locais	2015-10-27 12:22:45	2015-10-27 12:22:45
16	Simone Caroline Soave	43901525X	413.626.658-86	02/04/1994	simonecsoave@hotmail.com	(14) 9 9689-7384	Simone Ronaldo	Claudia Soave	(14) 3646-1512	Mineiros do Tietê / SP	Universidade do Sagrado Coração	Design	2014	Não	/uploads/comprovante de pagamento interdesign.jpg	t	Design de Produto - O Mobiliário Modular como Solução para Pequenos Espaços	2015-10-29 00:41:31	2015-10-29 00:41:31
17	JULIANO AMARAL CARVALHO	46182882	374.264.938-81	17/11/1989	carvalhojdesign@gmail.com	(18) 97664067	https://www.facebook.com/juliano.amaral.carvalho	Diana	(18) 965588587	Bauru/SP	UNIARA	ERGONOMIA	1	ABERGO, ERGODESIGN, RMISTO	/uploads/comprovante.jpg	t	A Influência Do Design Na Prevenção De Lesões Nos Cadeirantes: Um Estudo De Revisão	2015-10-31 00:48:43	2015-10-31 00:48:43
18	Marcel Barcelos Nogueira Barboza	403293467	42109661852	18/11/1992	marcel_barboza@hotmail.com	19 98933-0990	https://www.facebook.com/o.marcel.barboza	Juliane Vanja	19 3433-4858	Piracicaba - SP	UNESP	Design	5/10	Não	/uploads/Comprovante de Pagamento - 2 Simposio Interdesigners.jpg	f		2015-11-02 14:49:46	2015-11-02 14:49:46
19	Cassia Letícia Carrara domiciano	20558135-3	17403720857	19/07/1971	cassialcdomiciano@gmail.com	1432047872	Cassia carrara		1432047872	Bauru	Unesp				\N	f		2015-11-03 09:37:00	2015-11-03 09:37:00
\.


--
-- Name: InscritoSimposioGeral_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pgadmin
--

SELECT pg_catalog.setval('"InscritoSimposioGeral_id_seq"', 19, true);


--
-- Name: InscritoSimposio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pgadmin
--

SELECT pg_catalog.setval('"InscritoSimposio_id_seq"', 57, true);


--
-- Data for Name: convidados; Type: TABLE DATA; Schema: public; Owner: pgadmin
--

COPY convidados (id, foto, descricao, nome, created_at, updated_at) FROM stdin;
2	/uploads/bgp.png	Big Green Pillow é um estúdio indie criado por um grupo de amigos estudantes da UNESP Bauru com a paixão pelos games em comum entre eles.  http://biggreenpillow.com/work/index.html	Big Green Pillow 	2015-10-09 05:21:56	2015-10-09 06:35:00
12	/uploads/foto_maquinario pb.jpg	O Maquinário foi criado em 2012 pelos três sócios —  Bruno, Cindy e Thiago  — com o intuito de criar um espaço no qual o design fosse pensado de uma maneira diferente. Buscamos a inovação e a auto-construção, por meio da experimentação constante, de modo a absorver informações das mais variadas fontes e encontrar novos métodos, para atingir novos resultados.	Maquinário Laboratório Criativo	2015-10-09 06:24:40	2015-10-09 06:33:26
11	/uploads/asdknasn.jpg	A MusgUrbanu (ou apenas MU!) atualmente é formada pelos técnicos em comunicação  visual e estudantes de design - João Marcus Andrade de Souza e Gustavo Borges. Hoje,  intitulam-se como um núcleo criativo, pois unem os conhecimentos adquiridos através das   experiências e estudos, procurando soluções para qualquer problema/necessidade criativa   que esteja ao alcance. http://www.musgurbanu.com.br/	Musgurbanu	2015-10-09 06:19:15	2015-10-19 22:35:45
3	/uploads/damelie.png	D'Amelie - Fotografia com Açúcar é uma empresa de fotografia de casamento e lifestyle que se inspirou no filme O Fabuloso Destino de Amelie Poulain por acreditar no amor. Paula Machado e Glaucia Magri são apaixonadas por fotografia, design, viagens, cultura, bicicleta e gastronomia. É a dupla que busca em seu trabalho despertar e registrar o que há de mais gracioso nas relações humanas: o espontâneo, a sinceridade, a verdade e o amor. http://www.damelie.com/ 	D'Amelie - Fotografia	2015-10-09 05:34:44	2015-10-09 05:50:08
10	/uploads/Mauricio-Nakane--980x600 PB.jpg	Formado pela UNESP em 2012, atua profissionalmente na área de design de móveis há 3 anos na empresa Oppa. https://www.behance.net/maunakane	Maurício Nakane	2015-10-09 06:14:10	2015-10-09 06:14:10
6	/uploads/11880750_669988079804855_137456978_n.jpg	Desenhista e pintor, formado em Artes Visuais pela UDESC e co-fundador do Mímesis Conexões Artísticas (http://mimesis.art.br/). É professor de Anatomia e Desenho do Corpo Humano, Desenho Artístico e Pintura. Militante político, acredita que a liberdade apenas se conjuga na mais radical igualdade entre os seres. Escreve contos, poesias, peças de teatro e críticas de arte. https://anatomiaartistica.wordpress.com/	Gustavot Diaz	2015-10-09 05:57:01	2015-10-19 22:31:47
8	/uploads/tertuliia.png	O coletivo Tertúlia Fotografia, como o próprio nome já diz, é o encontro de quatro amigos que possuem o interesse pela prática fotográfica como algo em comum nas suas vidas. Alunos da Unesp de Bauru, perceberam que juntos poderiam oferecer um escopo de trabalho melhor e mais completo para futuros clientes. Cada um fotografa há algum tempo e possui experiência em determinada área, porém todos têm a certeza de que querem viver a fotografia. http://www.tertuliafotografia.com/	Tertúlia Fotografia	2015-10-09 06:01:11	2015-10-19 22:32:27
4	/uploads/20150421-_DSC0402.jpg	Estudante de Design na UNESP e freelancer nas áreas de Design Gráfico, Ilustração e Artes Sequenciais. http://gleissoncipriano.com/	Gleisson Cipriano	2015-10-09 05:48:39	2015-10-19 22:32:56
13	/uploads/NeneSurrealtchunai.jpg	Há mais de 10 anos vivendo da sua arte, o grafite, iniciado através das pixações, Nenê Surreal sempre trabalhou com artes e se apaixonou por esta técnica. Mulher, negra, artista, de família trabalhadora sempre buscou por meio das tintas demonstrar quem é, gritar por respeito, lutando cada dia por algo novo. https://instagram.com/surrealnene/ 	Nenê Surreal	2015-10-09 06:27:53	2015-10-19 22:34:20
9	/uploads/tuhchani.jpg	Valéria Bordin atua há 3 anos como ourives, produzindo peças que levam meu nome e como professora de joalheria artesanal, dando aulas particulares em meu atelier e ministrando palestras e oficinas práticas.	Valéria Bordin	2015-10-09 06:09:40	2015-10-19 22:34:30
14	/uploads/xablau.jpg	É Doutor em Design pela Universidade Estadual Paulista (UNESP - Campus de Bauru) na Área de Concentração: Desenho de Produto, Linha de Pesquisa: Planejamento de Produto; Mestre em Design (Planejamento de Produto) pela UNESP e Bacharel em Desenho Industrial (Habilitação em Programação Visual) pela mesma instituição. Atualmente é pesquisador do grupo Linguagem do Espaço e da Forma (Certificado pelo CNPq) e membro do LEMODe - Laboratório de Estudos em Meios e Objetos do Design (FAAC/UNESP).	Ricardo Rinaldi	2015-10-09 06:32:10	2015-10-19 22:35:02
\.


--
-- Name: convidados_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pgadmin
--

SELECT pg_catalog.setval('convidados_id_seq', 14, true);


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: pgadmin
--

COPY migrations (migration, batch) FROM stdin;
2014_10_12_000000_create_users_table	1
2014_10_12_100000_create_password_resets_table	1
2015_08_03_015008_create_convidados_table	1
2015_08_14_000013_create_simposios_table	1
2015_09_02_113628_inscricao_geral_simposio	2
2015_09_02_220403_inscricao_geral	3
2015_09_09_150542_create_oficinas_table	4
2015_09_09_150619_create_palestras_table	4
2015_09_16_001434_adicionar_nota_simposio	5
\.


--
-- Data for Name: oficinas; Type: TABLE DATA; Schema: public; Owner: pgadmin
--

COPY oficinas (id, foto, descricao, nome, created_at, updated_at) FROM stdin;
15	/uploads/NeneSurreal2.jpg	Oficina com a mistura da técnica do grafite aplicada a roupa. *Traga sua camiseta e venha grafitar e refletir sobre si também. 06/11 às 9h	Grafitando um Pouco de Si com Nenê Surreal	2015-10-16 10:01:50	2015-10-16 10:02:11
5	/uploads/moldelicia.jpg	Essa oficina traz um tiquinho do processo de moldes de silicone usado em diversas áreas, do design até a culinária passando pela arqueologia, dominação mundial e terapia em grupo.. O foco da oficina será a reprodução de uma figura em resina a partir de um molde de silicone e sua finalização com pintura, o objetivo é mostrar um pouco do que pode ser feito com a técnica e abrir uma fresta nas portas da percepção pra deixar essa luz a quem tem interesse. Duração: 4 horas  07/11 às 9h , na sala 55	Molde Lícia	2015-10-16 09:17:50	2015-10-16 09:17:50
3	/uploads/maoemaquina.JPG	E se sua roupa refletisse quem você é? Nesta oficina, através de noções básicas de crochê e bordado, faremos intervenções sobre peças do seu guarda-roupa. *Cada participante deverá escolher uma peça do seu guarda-roupas, de jeans, e levar no dia da oficina. Duração: 4 horas 07/11 às 14h, na sala 52	Mão e Máquina	2015-10-16 09:09:10	2015-10-16 09:38:05
2	/uploads/ilustradigital.JPG	Precisa daquele empurrãozinho para começar a ilustrar digitalmente? Não tenha medo se nunca tiver aberto um software de ilustração ou tocado numa mesa digitalizadora. Nós vamos mostrar que não é difícil! *Cada participante deverá levar sua mesa digitalizadora e notebook. Duração: 4 horas 07/11 às 14h, no LEDD	Ilustração Digital: Não é tão Díficil Assim	2015-10-16 09:08:15	2015-10-16 09:42:30
6	/uploads/quemevoceagora.jpg	Contar histórias é uma tradição que permeia nossas relações pessoais no dia-a-dia. Para potencializar a fala, o corpo é a melhor ferramenta para amplificar significados, mas é geralmente esquecida ou desprezada. (Venha com sua roupa mais confortável) Duração: 4 horas 07/11 às 9h, na sala 53	Quem é você agora?	2015-10-16 09:44:29	2015-10-16 09:44:29
7	/uploads/cartografiafantastica.jpg	Terra-média, Nárnia, Westeros: a literatura fantástica voltou com tudo, e a cada história lançada, um monte de mapas bonitões aparece nas nossas paredes. Mas que tal criar suas próprias terras mágicas em vez de imprimir a dos outros no xerox? Duração: 2 a 3 horas 07/11 às 9h, na sala 56	Cartografia Fantástica	2015-10-16 09:45:11	2015-10-16 09:45:11
8	/uploads/valeriabordin2.jpg	O objetivo desta oficina é colocar os alunos de design em contato com a Joalheria Artesanal, arte milenar e de grande valorização no mercado,de maneira rápida e eficiente. (INSCRIÇÕES ENCERRADAS) Duração: 8 horas divididas em dois dias. às 18h nos dias 05/11 na sala 58 e 06/11 na sala 57	Joalheria Artesanal com Valéria Bordin	2015-10-16 09:47:57	2015-10-16 09:50:03
9	/uploads/htmlcss.jpg	HTML e CSS são linguagens cada vez mais requisitadas de um designer, saber explorar o virtual será pré-requisito num futuro próximo. Então bora perder o medo das letrinha e colar nessa oficina? Você ver que não é tão complicado assim! Duração: 4 horas 06/11 às 18h, no LEDD	HTML CSS Basics - Portfolio	2015-10-16 09:51:40	2015-10-16 09:51:40
10	/uploads/sketchautomotivo.png	"Meu! Não consigo desenhar um carro" Seus problemas acabaram! Venha na oficina de Design Automotivo que você vai aprender as noções básicas pra poder construir suas asas e voar como uma borboleta! Duração: 4 horas 06/11 às 18h, na sala 52	Automotive Design - Sketches iniciais	2015-10-16 09:53:18	2015-10-16 09:53:18
11	/uploads/gustavotdiaz2.jpg	A oficina que irá proporcionar aos participantes noções de anatomia artística como suporte ao desenho do corpo humano; promover a reflexão sobre linguagem do desenho e sua prática através da experiência presencial do desenho com modelo vivo. Duração: 5 horas 06/11 às 14h, na sala 56	Desenho com Modelo Vivo com Gustavot Diaz	2015-10-16 09:55:31	2015-10-16 09:55:49
12	/uploads/cnm.jpg	Oficina de Cinema 4D, que permite criar ilustrações, peças tipográficas e animações com muita facilidade. A oficina pretende introduzir as ferramentas para que você possa desenvolver seus próprios projetos.* Trazer notebook com o programa instalado! Duração: 4 horas 06/11 às 14h, na sala 52	CNM	2015-10-16 09:56:51	2015-10-16 09:56:51
13	/uploads/brincandodemadeiramuda.jpg	Tá a fim de botar a mão na massa? Aqui você vai projetar a forma de brinquedos infantis, assim como sua finalização gráfica para dar ainda mais vida à forma com a sua criatividade supimpa e o MUDA design. Vem brincar com a gente na nossa oficina! \f Duração: 4 horas 06/11 às 14h, no LDMP	Brincando de Madeira - MUDA DESIGN	2015-10-16 09:57:48	2015-10-16 09:57:48
14	/uploads/linoleo.jpg	 A impressora deu pau? Não aguenta mais a mesa digitalizadora? Vem com nóis cavar linóleo e fazer umas gravuras muito loucas! Só trazer a vontade de produzir e fechar o bonde. Duração: 2 a 3 horas 06/11 às 16h, na Oficina Gráfica	Faça você mesmo: gravuras com linóleo	2015-10-16 09:58:44	2015-10-16 09:58:44
16	/uploads/2D_animation_lives_imagem.png	Se você sempre quis animar seus desenhos quadro a quadro no computador venha entender os conceitos básicos antes de mais nada e aprenda a usar uma das ferramentas mais úteis da animação digital: photoshop :D *Cada participante deverá levar sua mesa digitalizadora e notebook. Duração: 4 horas 06/11 às 9h, no LEDD	2D Animation Lives!!	2015-10-16 10:02:56	2015-10-16 10:02:56
17	/uploads/djrumacoisalevaoutra.png	Lembram do Ra-Tim-Bum? E do Viva Pitágoras? Trabalhando com objetos a nossa volta iremos propor a construção de um artefato que transfira um objeto de um ponto da sala a outro apenas com a criação deste circuito divertido e cheio de obstáculos Duração: 4 horas 06/11 às 9h. no LDMP	Uma Coisa Leva a Outra - Design Júnior	2015-10-16 10:03:43	2015-10-16 10:03:43
18	/uploads/tissainedazuera.jpg	E se você pudesse dar muitas risadas e ao mesmo tempo desenvolver seu pensamento sobre um processo de cabo a rabo? Pois bem, como já diria Dollynho: FAZER TISSÁINE COM HUMOR, PODE SIM! Venha trabalhar e relaxar com a gente numa oficina de pegadinhas. Duração: 2 horas 06/11 às 11h, na sala 52	O tissaine da zuera : aprendendo com os grandes mestres das pegadinhas	2015-10-16 10:04:26	2015-10-16 10:04:26
19	/uploads/sexmachine.jpg	A sexualidade se dá em diversas circunstâncias. Pela história, o erotismo tem sido visto por modelos estereotipados. A SEX MACHINE é o momento para você falar sem medo sobre sexo, Design e linguagem contemporânea de uma forma clara e objetiva. Duração: 4 horas 05/11 às 18h, na sala 52	SEX MACHINE	2015-10-16 10:05:13	2015-10-16 10:05:13
20	/uploads/designsocial.jpg	Um projeto aplicado é um pedaço do seu potencial e conhecimento retornado à sociedade. O seu impacto como designer segue o que você acredita? Vamos explorar juntos diferentes formas de beneficiar e somar socialmente e exercitar esse pensamento? Duração: 4 horas 05/11 às 18h, na sala 56	Design Como Potência Social	2015-10-16 10:05:52	2015-10-16 10:05:52
21	/uploads/prototipagempapel.jpg	Você já se perguntou como nasce um aplicativo ou site? Quais são os primeiros passos? Venha pensar e prototipar um produto digital de forma rápida, criativa e dinâmica. Duração: 4 horas 05/11 às 14h, na sala 56	Antes do pixel, o papel: prototipagem digital com o LTIA	2015-10-16 10:06:38	2015-10-16 10:06:38
22	/uploads/reluzlabsol.jpg	Melhore a qualidade do seu despacho criando velas decorativas aromáticas utilizando parafina flocada, sobras de velas e diversos corantes e essências, em formas de silicone e outros moldes e bases inusitados. Duração: 4 horas 05/11 às 14h, na sala 52	Reluz - LabSOL	2015-10-16 10:07:23	2015-10-16 10:07:23
23	/uploads/damelie2.png	A experiência de duas fotógrafas no mercado bauruense. A dupla Paula e Glaucia, do D'Amelie Fotografia, respondem as principais questões que envolvem o começo da profissão.* Traga equipamento, perguntas e objetos que retratem o que vocês são.  Duração: 4 horas 05/11 às 14h, no Bosque	Fotografia com açúcar com D'Amelie Fotografia	2015-10-16 10:39:32	2015-10-16 10:39:32
24	/uploads/masterinky.png	Aprenda a montar infográficos com design inovador sobre os lanches mais famosos do mundo! Queremos ver se você tem tudo para ser um MasterInky, o melhor infográfico/prato ira ganhar o troféu que representa sua saga na oficna! Não esqueça do tômpero! Duração: 4 horas 07/11 às 14h, na Oficina Gráfica	MasterInky	2015-10-19 03:40:14	2015-10-19 03:40:14
\.


--
-- Name: oficinas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pgadmin
--

SELECT pg_catalog.setval('oficinas_id_seq', 24, true);


--
-- Data for Name: palestras; Type: TABLE DATA; Schema: public; Owner: pgadmin
--

COPY palestras (id, foto, descricao, nome, created_at, updated_at) FROM stdin;
1	/uploads/macumbaboacumba.jpg	Já deu gole de bebida pro santo? Viu pinga e farofa na esquina? Se fartou em festas de Cosme e Damião? Venha saber mais sobre a origem desses costumes, conversar sobre a formação da identidade cultural brasileira e conhecer nosso papel nisso tudo. Duração: 2 horas 07/11 às 16h, na sala 1	Macumba Ou Boacumba	2015-10-16 10:08:35	2015-10-16 10:08:35
11	/uploads/gleisson2.jpg	Sabe como resolver os problemas do mundo, mas mal consegue conciliar seus afazeres de casa (a.k.a. lavar uma louça) com o trabalho da faculdade? Tem um potencial imenso, mas não consegue sair do sofá?? SEUS PROBLEMAS ACABARAM!!! Ou quase isso… Se prepare para receber aquele 'empurrãozinho' que você tanto precisa! Venho dividir minhas experiências em como manter e coordenar múltiplos projetos simultâneos sem ficar louco, doente ou sofrer grandes privações. Duração: 2 horas 05/11 às 14h, na sala 1	Aumentando a Produtividade: 5 Ferramentas para dar um Boost nessa sua Vidinha  com Gleisson Cipriano	2015-10-16 10:33:10	2015-10-16 10:33:25
3	/uploads/bgp2.png	Teremos um bate-papo para quem gostaria de entender como começar a projetar, criar e distribuir seus próprios jogos mundialmente de maneira independente. Duração: 1 hora 07/11 às 10h, na sala 52	"Quero fazer jogos indie, comofas?" com Big Green Pillow	2015-10-16 10:12:07	2015-10-16 10:20:14
4	/uploads/Mauricio-Nakane.jpg	Dará uma aula dedicada a dividir suas experiências e conhecimentos indispensáveis ao designer que pretende desenhar móveis. Entre tópicos a serem abordados estão: Ferragens, Industria Nacional, Custos entre outros. O foco é levar o conhecimento adquirido no mercado para o aluno que possa desenvolver projetos com maior eficácia, consciência e livre das limitações impostas pela falta de informação. Duração: 2 horas 07/11 às 11h na sala 1	O que você precisa saber para desenhar Móveis  com Maurício Nakane	2015-10-16 10:22:10	2015-10-16 10:22:10
2	/uploads/FOTO_MU2.jpg	A MusgUrbanu (ou apenas MU!) atualmente é formada pelos técnicos em comunicação visual e estudantes de design - João Marcus Andrade de Souza e Gustavo Borges. Hoje, intitulam-se como um núcleo criativo, pois unem os conhecimentos adquiridos através das experiências e estudos, procurando soluções para qualquer problema/necessidade criativa que esteja ao alcance. Duração: 2 horas  07/11 às 14h, na sala 1	"Deus, oq tá acontesenu com a minha vida?" com MUSGURBANU	2015-10-16 10:10:13	2015-10-16 10:22:32
5	/uploads/Cartaz Merdafônicas 2015 2.jpg	Adora discussões e papos de bar? Saudades da época em que fervorosos debates inúteis não eram resolvidos com pesquisa no Google? Então venha prestigiar esse evento sem precedentes. Em sua 3º edição, o Merdafônicas revive grandes clássicos e também traz novas indagações, polêmicas e crossovers. Prove seus pontos de vista, seja criativo e prepare-se para ouvir e dizer muita merda.  Duração: 2 horas 06/11 às 20h, na sala 1	3º Merdafônicas	2015-10-16 10:24:34	2015-10-16 10:24:34
6	/uploads/tertulia2.jpg	Mesa redonda com o coletivo Tertúlia Fotografia, para apresentar o trabalho feito pelo mesmo bem como discutir quais são os reflexos de conhecimento e habilidades refletidos em cada integrante. A mesa redonda visa também discutir quais são os reflexos e implicações de ser seu próprio chefe. Duração: 2 horas 06/11 às 18h, na sala 1	"Reflexos de um Coletivo" com o Coletivo Tertúlia Fotografia	2015-10-16 10:26:09	2015-10-16 10:26:24
7	/uploads/foto_maquinario.jpg	Desafios, oportunidades, primeiros passos, conquistas, medos, parcerias, eventos, prêmios . . . Tudo isso abordaremos na nossa palestra compartilhando quais são as melhores decisões a se tomar na vida do jovem criativo. Duração: 2 horas 06/11 às 14h, na sala 1	Maquinário Laboratório Criativo: Paixão & Empreendedorismo	2015-10-16 10:27:41	2015-10-16 10:27:41
8	/uploads/quadrinhos101.jpg	Pra quem curte quadrinhos mas ainda não sabe bananas sobre, vem que aqui tem! Vou mostrar um monte de coisa bacaninha e super útil pra quem tem interesse na área, desde o lápis de rascunho ate a impressão!  Duração: 2 horas 06/11 às 9h, na sala 1	Quadrinhos 101	2015-10-16 10:28:19	2015-10-16 10:28:19
10	/uploads/naoeapenasumshape.jpg	Alunos de design gráfico e produto trabalhando juntos no processo de fabricação de um shape ilustrado de bambu, contando como foi o processo, as experiências, a exploração das diversas áreas do design e claro, apresentação do produto final! Duração: 2 horas 07/11 às 9h, na sala 1	Não é apenas um Shape	2015-10-16 10:30:29	2015-10-16 10:30:29
9	/uploads/Ricardo2.jpg	O Design de Superfície tem se fortalecido na esfera do Design. As experimentações do passado, hoje, dão vazão a metodologias que integram conhecimentos e estimulam o processo criativo. Abordagens projetuais se interseccionam e dão forma física às superfícies representacionais, estruturais e relacionais. Essas cooperações, no processo de design, formam um campo híbrido de conceitos e soluções. Duração: 2h 05/11 às 19h, na sala 1	Design de Superfície: abordagens e hibridismo com Ricardo Mendonça Rinaldi	2015-10-16 10:29:35	2015-10-16 10:30:53
\.


--
-- Name: palestras_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pgadmin
--

SELECT pg_catalog.setval('palestras_id_seq', 11, true);


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: pgadmin
--

COPY password_resets (email, token, created_at) FROM stdin;
anabiaandrade@faac.unesp.br	c806810cd416beba0a9f24b6eb89034e3774dbd57cfa8929fc8c143037739802	2015-09-23 11:45:54
anacr_fatec@yahoo.com.br	94f6758a7d3f9447955d6a57bc9dc4fe437c94d0ec55dd08ab284dc8262a8080	2015-10-10 18:22:47
barata@faac.unesp.br	226840670463a605affe46799acd9722ba28c60b5cebb39ed8acf4d601cda13d	2015-10-16 01:38:55
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: pgadmin
--

COPY users (id, name, email, password, remember_token, created_at, updated_at) FROM stdin;
15	Franciane da Silva Falcão	francifalcao@gmail.com	$2y$10$a7efoirdoK9HTOCiOt6DWOSqwrbK2S3t7hsjzVIBOKwQoJoq.Wp8C	XECdCRdeHJY5kOiip7ALZjwepqrL1ksjjilMAdWtmMWhRmrE23sQyqvSFkb3	2015-10-12 14:00:52	2015-10-12 17:00:20
16	Cassia Leticia Carrara Domiciano	cassiacarrara@gmail.com	$2y$10$gfS7GgyAwoSPvZ5pxNkFNu7EBI.dNlzFG5FegQqLmT8QotgBhTxy2	\N	2015-10-13 01:05:44	2015-10-13 01:05:44
4	Milton Koji Nakata	milton@faac.unesp.br	$2y$10$EysZ.OMN4AyV.Cdb92QxNOIFDBHGl1LLKS./h6cAiMlusAud3Jmzm	93XyDXqx3QqzOar6r57cXc1Z1yrZLF6bFHqLaFcZuHPamuvnnSiGodHykjVX	2015-09-16 13:49:45	2015-09-16 13:52:51
8	ANA CRISTINA MAURÍCIO FERREIRA	anacr_fatec@yahoo.com.br	$2y$10$0vvNW9lP0zXgQNj2/4eCMOkeraSLimM/7Cmp1Fj1g27y1Ct9GtQq.	UGk4ZPtH7kjqzMfEmjhPkpOA8m2frRQNsaRtSKxuWcwdklEwjN2LFE7K6rTL	2015-09-23 22:15:56	2015-10-13 13:08:22
1	COIDe 2015	interdesigners.unesp@gmail.com	$2y$10$5AvajUdtFVMdJW7MTbkmNuPKDuENZO2ZaeFC1E.a13ADMQMPBBz6W	JE1NUkedLMsybePOZuptOrrCBl8IBPooND0VObSVbuqZPvDST4SmWbt0SWZ9	2015-08-17 11:40:41	2015-10-16 06:48:09
17	MILTON KOJI NAKATA	miltonakata@nakata.nakata	$2y$10$/dGtyvA3PuKPtvWvaSksS.0RK8GjTtVxtvszbLMOSRa1.u/Kb/Qke	3mizBI6huEq3XJ4G8kppKr71uNe2HhgANqYtihO3qIdFLDS1oI6rdZwItV8Z	2015-10-16 06:49:49	2015-10-16 07:30:33
18	tomas barata	barata@faac.unesp.br	$2y$10$23sbglZT2ZjEqgtWD./nkuHP0Bl9BXElxaWyxeVeDAPYwlFK1So7q	\N	2015-10-17 11:42:53	2015-10-17 11:42:53
7	Gabriel Henrique Cruz Bonfim	gh_cb@hotmail.com	$2y$10$3I3OWpR9d3QavU.WxoBTwOn9c9COjRqwOz9rrxW8MEn0ZhiKJf3gS	dUGjsESHCuhxQXmLublsvMiwjuPoLGvP2fTG2JNDaz5FaqaXLHS6nlqBKqJx	2015-09-23 17:29:50	2015-10-21 23:55:36
11	paschoarelli	paschoarelli@faac.unesp.br	$2y$10$V.IFehoRzpSLzlmkoS8LbOUiNkwkYqrRI1LnPhoHZ3cH3mKJy8CNK	ivyv6JxJnSNvR22ouvqnWytphuoU13A7DUwLR7Uc3oUYZ7SC1FohD1gjus0Z	2015-09-24 11:31:03	2015-09-24 11:31:35
12	Fausto Orsi Medola	fausto.medola@faac.unesp.br	$2y$10$c4y42z7r5JOOhbPvNf.yhOjbKwmR2aX7RO0a0Nz5hOU80cht3v8TO	jJi8ZiZyWjGi6U6fHSpQ5rzyAyuIYN8aCx4Gmlb7txGFKE30JaSOG45gpKWz	2015-09-24 12:23:29	2015-09-24 12:23:42
6	Paula da Cruz Landim	paula@faac.unesp.br	$2y$10$DFJJ6Gtb6QyPVUijX8MjjOEc0z1xEkf4sRyOssHjoDRQ3MbXmusiS	DkvTbehaAzArqpOJM1Bie1568L02yuGGeUMPIvr5IXLTIuHqpANYaZ4553Ti	2015-09-23 13:36:07	2015-09-24 20:33:00
13	ANA BEATRIZ PEREIRA DE ANDRADE	anabiaandrade@openlink.com.br	$2y$10$iGbJnU41FfRjtAdLQKwQjeP7n5MNM1WeazxiyvPiwDaWmV9qqhjim	\N	2015-09-25 20:34:16	2015-09-25 20:34:16
9	Mateus Batista Santos	mateusbatistasantos@gmail.com	$2y$10$BAWMYedVNPUEuG/NwauKxen6x8dYRIaqeAgUQdnO6dS4zxtXKKKC6	vCm0fyhfojGPQgInqUl74hQb7pIcKp6KxHh11RvPPVj8q5ddTIHgSeCWITVm	2015-09-24 01:41:29	2015-10-01 17:33:19
10	Claudemilson dos Santos	claudemilson@fct.unesp.br	$2y$10$cCxhtG6SAeGIBR673k5MY.lzPrPIfs0WJH8ybIXDNJErCjCoOGvma	pA0VqG25uH8CyM2j04Ee3EXQibXbNyQXfsglgCZmFpfTl9ja87Dhn3N4Qv52	2015-09-24 07:42:12	2015-10-05 12:16:52
14	Fabiane Rodrigues Fernandes	fabyfernandes@gmail.com	$2y$10$JqamHd48u8PU7VrS8iXi8ep0BUwPqVzVcu.AJUNDhnmUIOaPjNvwC	\N	2015-10-07 15:59:32	2015-10-07 15:59:32
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: pgadmin
--

SELECT pg_catalog.setval('users_id_seq', 18, true);


--
-- Name: InscritoGeral_pkey; Type: CONSTRAINT; Schema: public; Owner: pgadmin; Tablespace: 
--

ALTER TABLE ONLY "InscritoGeral"
    ADD CONSTRAINT "InscritoGeral_pkey" PRIMARY KEY (id);


--
-- Name: InscritoSimposioGeral_pkey; Type: CONSTRAINT; Schema: public; Owner: pgadmin; Tablespace: 
--

ALTER TABLE ONLY "InscritoSimposioGeral"
    ADD CONSTRAINT "InscritoSimposioGeral_pkey" PRIMARY KEY (id);


--
-- Name: InscritoSimposio_pkey; Type: CONSTRAINT; Schema: public; Owner: pgadmin; Tablespace: 
--

ALTER TABLE ONLY "InscritoSimposio"
    ADD CONSTRAINT "InscritoSimposio_pkey" PRIMARY KEY (id);


--
-- Name: convidados_pkey; Type: CONSTRAINT; Schema: public; Owner: pgadmin; Tablespace: 
--

ALTER TABLE ONLY convidados
    ADD CONSTRAINT convidados_pkey PRIMARY KEY (id);


--
-- Name: oficinas_pkey; Type: CONSTRAINT; Schema: public; Owner: pgadmin; Tablespace: 
--

ALTER TABLE ONLY oficinas
    ADD CONSTRAINT oficinas_pkey PRIMARY KEY (id);


--
-- Name: palestras_pkey; Type: CONSTRAINT; Schema: public; Owner: pgadmin; Tablespace: 
--

ALTER TABLE ONLY palestras
    ADD CONSTRAINT palestras_pkey PRIMARY KEY (id);


--
-- Name: users_email_unique; Type: CONSTRAINT; Schema: public; Owner: pgadmin; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: pgadmin; Tablespace: 
--

ALTER TABLE ONLY users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: pgadmin; Tablespace: 
--

CREATE INDEX password_resets_email_index ON password_resets USING btree (email);


--
-- Name: password_resets_token_index; Type: INDEX; Schema: public; Owner: pgadmin; Tablespace: 
--

CREATE INDEX password_resets_token_index ON password_resets USING btree (token);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

