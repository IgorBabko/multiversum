--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.1
-- Dumped by pg_dump version 9.5.2

-- Started on 2016-06-06 13:08:56 EEST

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 186 (class 1259 OID 49907)
-- Name: videos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE videos (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    description text,
    type character varying(255) NOT NULL,
    url text NOT NULL,
    published_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE videos OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 49905)
-- Name: videos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE videos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE videos_id_seq OWNER TO postgres;

--
-- TOC entry 2384 (class 0 OID 0)
-- Dependencies: 185
-- Name: videos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE videos_id_seq OWNED BY videos.id;


--
-- TOC entry 2260 (class 2604 OID 49910)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY videos ALTER COLUMN id SET DEFAULT nextval('videos_id_seq'::regclass);


--
-- TOC entry 2379 (class 0 OID 49907)
-- Dependencies: 186
-- Data for Name: videos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY videos (id, title, description, type, url, published_at, created_at, updated_at) FROM stdin;
2	Большая миграция. Проблема беженцев.	\N	preview	https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%91%D0%BE%D0%BB%D1%8C%D1%88%D0%B0%D1%8F+%D0%BC%D0%B8%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D1%8F.+%D0%9F%D1%80%D0%BE%D0%B1%D0%BB%D0%B5%D0%BC%D0%B0+%D0%B1%D0%B5%D0%B6%D0%B5%D0%BD%D1%86%D0%B5%D0%B2.+%D0%90%D0%BD%D0%BE%D0%BD%D1%81+(1).mp4	2016-05-30 10:49:34	\N	\N
5	Время. Путешествие во времени. Машина времени.	\N	preview	https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%92%D1%80%D0%B5%D0%BC%D1%8F.%D0%9F%D1%83%D1%82%D0%B5%D1%88%D0%B5%D1%81%D1%82%D0%B2%D0%B8%D0%B5+%D0%B2%D0%BE+%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B8%3B+%D0%BC%D0%B0%D1%88%D0%B8%D0%BD%D0%B0+%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B8%3B.mp4	2016-05-30 10:55:14	\N	\N
6	Все ищет друг друга. Второй закон.	\N	preview	https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%92%D1%81%D0%B5+%D0%B8%D1%89%D0%B5%D1%82+%D0%B4%D1%80%D1%83%D0%B3+%D0%B4%D1%80%D1%83%D0%B3%D0%B0.+%D0%92%D1%82%D0%BE%D1%80%D0%BE%D0%B8%CC%86+%D0%B7%D0%B0%D0%BA%D0%BE%D0%BD.+%D0%90%D0%BD%D0%BE%D0%BD%D1%81.mp4	2016-05-30 10:55:56	\N	\N
7	Дух. Душа. Шагреневая кожа. Отец, Сын и Дух - триединство человека.	\N	preview	https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%94%D1%83%D1%85.+%D0%94%D1%83%D1%88%D0%B0+-+%D1%88%D0%B0%D0%B3%D1%80%D0%B5%D0%BD%D0%B5%D0%B2%D0%B0%D1%8F+%D0%BA%D0%BE%D0%B6%D0%B0.++%D0%9E%D1%82%D0%B5%D1%86%2C+%D0%A1%D1%8B%D0%BD+%D0%B8+%D0%94%D1%83%D1%85-+%D1%82%D1%80%D0%B8%D0%B5%D0%B4%D0%B8%D0%BD%D1%81%D1%82%D0%B2%D0%BE+%D1%87%D0%B5%D0%BB%D0%BE%D0%B2%D0%B5%D0%BA%D0%B0.mp4	2016-05-30 10:57:30	\N	\N
9	Любовь не каждому дана.	\N	preview	https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%9B%D1%8E%D0%B1%D0%BE%D0%B2%D1%8C+%D0%BD%D0%B5+%D0%BA%D0%B0%D0%B6%D0%B4%D0%BE%D0%BC%D1%83+%D0%B4%D0%B0%D0%BD%D0%B0.(%D0%B0%D0%BD%D0%BE%D0%BD%D1%81).mp4	2016-05-30 10:59:12	\N	\N
12	Человек создает свою жизнь, выстраивает пространство. Инструменты.	\N	preview	https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%A7%D0%B5%D0%BB%D0%BE%D0%B2%D0%B5%D0%BA+%D1%81%D0%BE%D0%B7%D0%B4%D0%B0%D0%B5%D1%82+%D1%81%D0%B2%D0%BE%D1%8E+%D0%B6%D0%B8%D0%B7%D0%BD%D1%8C%2C+%D0%B2%D1%8B%D1%81%D1%82%D1%80%D0%B0%D0%B8%D0%B2%D0%B0%D0%B5%D1%82+%D0%BF%D1%80%D0%BE%D1%81%D1%82%D1%80%D0%B0%D0%BD%D1%81%D1%82%D0%B2%D0%BE.+%D0%98%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D1%8B.mp4	2016-05-30 11:01:58	\N	\N
11	Неполное познание информации - ложь.	\N	preview	https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%9D%D0%B5%D0%BF%D0%BE%D0%BB%D0%BD%D0%BE%D0%B5+%D0%BF%D0%BE%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D0%B5+%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%B8-+%D0%BB%D0%BE%D0%B6%D1%8C.+%D0%90%D0%BD%D0%BE%D0%BD%D1%81.mp4	2016-05-30 11:01:07	\N	\N
10	Не познавший любви уходит в прошлое.	\N	preview	https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%9D%D0%B5+%D0%BF%D0%BE%D0%B7%D0%BD%D0%B0%D0%B2%D1%88%D0%B8%D0%B8%CC%86+%D0%BB%D1%8E%D0%B1%D0%B2%D0%B8+%D1%83%D1%85%D0%BE%D0%B4%D0%B8%D1%82+%D0%B2+%D0%BF%D1%80%D0%BE%D1%88%D0%BB%D0%BE%D0%B5.mp4	2016-05-30 10:59:55	\N	\N
8	Заказ Земли людям. (ХХ век) - об освобождении от энергоресурсов.	\N	preview	https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%97%D0%B0%D0%BA%D0%B0%D0%B7+%D0%97%D0%B5%D0%BC%D0%BB%D0%B8++%D0%BB%D1%8E%D0%B4%D1%8F%D0%BC+(+%D0%A5%D0%A5+%D0%B2%D0%B5%D0%BA)-+%D0%BE%D0%B1+%D0%BE%D1%81%D0%B2%D0%BE%D0%B1%D0%BE%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D0%B8+%D0%BE%D1%82+%D1%8D%D0%BD%D0%B5%D1%80%D0%B3%D0%BE%D1%80%D0%B5%D1%81%D1%83%D1%80%D1%81%D0%BE%D0%B2.mp4	2016-05-30 10:58:37	\N	\N
3	Брать ответственность на себя - есть Работа. Дар Божий.	\N	preview	https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%91%D1%80%D0%B0%D1%82%D1%8C+%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D1%8C+%D0%BD%D0%B0+%D1%81%D0%B5%D0%B1%D1%8F+-+%D0%B5%D1%81%D1%82%D1%8C+%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0.+%D0%94%D0%B0%D1%80+%D0%91%D0%BE%D0%B6%D0%B8%D0%B8%CC%86.+%D0%90%D0%BD%D0%BE%D0%BD%D1%81.mp4	2016-05-30 10:50:23	\N	\N
13	Любовь. Тактильные волокна.	\N	lecture	https://s3.eu-central-1.amazonaws.com/multiversum/lectures/%D0%9B%D1%8E%D0%B1%D0%BE%D0%B2%D1%8C_%D1%82%D0%B0%D0%BA%D1%82%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5_%D0%B2%D0%BE%D0%BB%D0%BE%D0%BA%D0%BD%D0%B0.mp4	2016-05-30 11:03:14	\N	\N
15	Время в котором мы живем (часть 1).	\N	lecture	https://s3.eu-central-1.amazonaws.com/multiversum/lectures/%D0%B2%D1%80%D0%B5%D0%BC%D1%8F_%D0%B2_%D0%BA%D0%BE%D1%82%D0%BE%D1%80%D0%BE%D0%BC_%D0%BC%D1%8B_%D0%B6%D0%B8%D0%B2%D0%B5%D0%BC.mp4	2016-05-30 11:04:42	\N	\N
16	Время в которм мы живем (часть 2).	\N	lecture	https://s3.eu-central-1.amazonaws.com/multiversum/lectures/%D0%B2%D1%80%D0%B5%D0%BC%D1%8F_%D0%B2_%D0%BA%D0%BE%D1%82%D0%BE%D1%80%D0%BE%D0%BC_%D0%BC%D1%8B_%D0%B6%D0%B8%D0%B2%D0%B5%D0%BC_2.mp4	2016-05-30 11:05:21	\N	\N
17	Время в котором мы живем (часть 3).	\N	lecture	https://s3.eu-central-1.amazonaws.com/multiversum/lectures/%D0%B2%D1%80%D0%B5%D0%BC%D1%8F_%D0%B2_%D0%BA%D0%BE%D1%82%D0%BE%D1%80%D0%BE%D0%BC_%D0%BC%D1%8B_%D0%B6%D0%B8%D0%B2%D0%B5%D0%BC_3.mp4	2016-05-30 11:05:58	\N	\N
19	Любовь. Игорь Касьяненко.	\N	lecture	https://s3.eu-central-1.amazonaws.com/multiversum/lectures/%D0%BB%D1%8E%D0%B1%D0%BE%D0%B2%D1%8C_%D0%B8%D0%B3%D0%BE%D1%80%D1%8C_%D0%BA%D0%B0%D1%81%D1%8C%D1%8F%D0%BD%D0%B5%D0%BD%D0%BA%D0%BE.mp4	2016-05-30 11:09:00	\N	\N
18	Реинкарнация.	\N	lecture	https://s3.eu-central-1.amazonaws.com/multiversum/lectures/%D1%80%D0%B5%D0%B8%D0%BD%D0%BA%D0%B0%D1%80%D0%BD%D0%B0%D1%86%D0%B8%D1%8F.mp4	2016-05-30 11:08:31	\N	\N
20	Ментально-духовное развитие	\N	lecture	https://s3.eu-central-1.amazonaws.com/multiversum/lectures/%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D1%8F+1+%D0%BC%D0%B5%D0%BD%D1%82%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE-%D0%B4%D1%83%D1%85%D0%BE%D0%B2%D0%BD%D0%BE%D0%B5+%D1%80%D0%B0%D0%B7%D0%B2%D0%B8%D1%82%D0%B8%D0%B5+(1).mp4	2016-06-06 12:48:42	\N	\N
21	Лекция 1 - вопросы	\N	lecture	https://s3.eu-central-1.amazonaws.com/multiversum/lectures/%D0%BB%D0%B5%D0%BA%D1%86%D0%B8%D1%8F+1+-+%D0%B2%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B.mp4	2016-06-06 12:51:45	\N	\N
4	Время. Что такое время. Временное пространство. Построение времени.	Почему мы часто не можем понять друг друга? То что доступно одному,  непосильное достижение для другого. Говорят,  плохо работаем,  или нет желания, нет веры.  Все мы разные. Каждый человек приходит из Вечности, имея свой багаж, свое предназначение. Он проживает только свою жизнь, свою судьбу.Фатализм? Все гораздо глубже, интереснее.  Прекрасно, что мы не можем физически подействовать друг на друга, иначе мир бы давно перестал существовать. Закон "все ищет друг друга"-  в чем он?.. Элементарно и в хорошем и в плохом - встречи в жизни предназначены судьбою. Убийца никогда не убьет, если не судьба. Любовный поцелуй никогда не состоится, если не судьба.  Но -все зависит от человека. Что же можем мы и в каких случаях это возможно?Где же эта эволюция? Где оно - развитие? Когда и как мы можем меняться? Какие инструменты нужны для этого? Об  этом речь  впереди...	preview	https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%92%D1%80%D0%B5%D0%BC%D1%8F.+%D0%A7%D1%82%D0%BE+%D1%82%D0%B0%D0%BA%D0%BE%D0%B5+%D0%B2%D1%80%D0%B5%D0%BC%D1%8F.+%D0%92%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%BD%D0%BE%D0%B5+%D0%BF%D1%80%D0%BE%D1%81%D1%82%D1%80%D0%B0%D0%BD%D1%81%D1%82%D0%B2%D0%BE.+%D0%9F%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B5%D0%BD%D0%B8%D0%B5+%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B8.mp4	2016-05-30 10:54:26	\N	\N
14	Время.	\N	lecture	https://s3.eu-central-1.amazonaws.com/multiversum/lectures/%D0%B2%D1%80%D0%B5%D0%BC%D1%8F.mp4	2016-05-30 11:03:39	\N	\N
1	Реинкарнация, или очередной приход человека на Землю.	реинкарнация или перевоплощение в следующее временное пространство(в следующий приход). познание - через боль. оказывается, можно придти в то же время, но надо самому его построить здесь на земле, то есть подготовить.  сколько же сохранено нашей информации во вселенной!  и ее можно оживить, посетить... Почему мы не знаем прошлой жизни? Генная инженерия. Любовь и страсть. Работа- брать ответственность на себя...категори  людей  на земле т низшей к высшей\r это нормально. не понимаю, зачем это учение изъяли из Библии? кажется, Юстиниан в 6 веке вроде бы...	preview	https://s3.eu-central-1.amazonaws.com/multiversum/previews/%D0%90%D0%BD%D0%BE%D0%BD%D1%81.+%D0%A0%D0%B5%D0%B8%D0%BD%D0%BA%D0%B0%D1%80%D0%BD%D0%B0%D1%86%D0%B8%D1%8F+%2C+%D0%B8%D0%BB%D0%B8+%D0%BE%D1%87%D0%B5%D1%80%D0%B5%D0%B4%D0%BD%D0%BE%D0%B8%CC%86+%D0%BF%D1%80%D0%B8%D1%85%D0%BE%D0%B4+%D1%87%D0%B5%D0%BB%D0%BE%D0%B2%D0%B5%D0%BA%D0%B0+%D0%BD%D0%B0+%D0%97%D0%B5%D0%BC%D0%BB%D1%8E.mp4	2016-05-30 10:48:37	\N	\N
\.


--
-- TOC entry 2385 (class 0 OID 0)
-- Dependencies: 185
-- Name: videos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('videos_id_seq', 52, true);


--
-- TOC entry 2263 (class 2606 OID 49916)
-- Name: videos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY videos
    ADD CONSTRAINT videos_pkey PRIMARY KEY (id);


-- Completed on 2016-06-06 13:08:57 EEST

--
-- PostgreSQL database dump complete
--

