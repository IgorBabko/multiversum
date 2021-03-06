PGDMP     "                    t           multiversum    9.5.1    9.5.2 	    N	           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            O	           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �            1259    50000    videos    TABLE     y  CREATE TABLE videos (
    id integer NOT NULL,
    title character varying(255) NOT NULL,
    description text,
    type character varying(255) NOT NULL,
    img character varying(255),
    url text NOT NULL,
    published_at timestamp(0) without time zone DEFAULT now() NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.videos;
       public         postgres    false            �            1259    49998    videos_id_seq    SEQUENCE     o   CREATE SEQUENCE videos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.videos_id_seq;
       public       postgres    false    186            P	           0    0    videos_id_seq    SEQUENCE OWNED BY     1   ALTER SEQUENCE videos_id_seq OWNED BY videos.id;
            public       postgres    false    185            �           2604    50003    id    DEFAULT     X   ALTER TABLE ONLY videos ALTER COLUMN id SET DEFAULT nextval('videos_id_seq'::regclass);
 8   ALTER TABLE public.videos ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    186    185    186            K	          0    50000    videos 
   TABLE DATA               g   COPY videos (id, title, description, type, img, url, published_at, created_at, updated_at) FROM stdin;
    public       postgres    false    186   P	       Q	           0    0    videos_id_seq    SEQUENCE SET     5   SELECT pg_catalog.setval('videos_id_seq', 1, false);
            public       postgres    false    185            �           2606    50009    videos_pkey 
   CONSTRAINT     I   ALTER TABLE ONLY videos
    ADD CONSTRAINT videos_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.videos DROP CONSTRAINT videos_pkey;
       public         postgres    false    186    186            K	      x��\�n�q��}����8�^�	�Z�?� A�(���Z�vm����jEYZ�]$��7v.��s!���}��W�ꫪ���CJ��	�F3}9}NU�������R�/I/9��'����i2I�!��/�az�L�a9�M�����J��d��G�G��+�=N�tr����y��g�k��&��K����t��'����.=xx�'?��S��}��Q�ڵGk�{�޿��G�~Pk��޿��x�����������я~r�ᣏ�_ӛ]{���[�yc������;���>o�s�R�_�w7����ߒk+˸�z[>����JM�͍���h������nO�cݔ9���@�
���j�,r�]���6�f����������jc��ڮ����j���Y�`}���;��R�i���5!MΓQ���у���8���@�Ӥ�~
�uL� ���W��NZ��Zn8��U��h�]�Z�ްi'HZ��\w�f:��U��yD��U;u��������U�������ݓL�C���)m.H|�L~h5�a9}Bz�K����X�/}���_�~��@��2Va��[���p5���M�0�(�V�2�_8��ؼ't�����<�UL���,
�>��d̗�+��œ�9�+Ƅ�7N�,n.^fH��dƶF+ ��fE����xD�I�ʎi�w��i����	�+��;����XM���>,�gyv��{9��w�f��t����$د�e���������/��D�X�9��3�'�,�>네�F`�L!R�o����r$�J3���&g�BL����d6�!�(=�s^0��_�m���<.k�E5Lwy�D�0ᝳ���ϡ"���>����0 !:5ɮ;ǔ�$�=Ve?�5�m�j�g!9b�=���v��1�p(֪��:�%����3�z,N؞s2�+N�r"*��M���=�G��vAs��^��/��$r�툭AS��jj1I���Ӊ^h�I���k~�����?���%�n��w�r2���J����T}��TO>l��� xGN�q1U�Q�-�C۹�n�q���R��Y��Z�V���*��8��}�8�#�8��q�o^� :]5Ƹ���E���#Ļ;;3�pÃ�͊��m�����`����j�O����(�ou�mvۅ2�_�W#K> dc[E���3�u���_�]����'����^k�e޼oj�y}]h�u���dM3��#��W�7�	����J�n�F��$���}�!��i�T�ͥ�s��$v�$�q2`WňM��?�*H�Gp��_?��<`޿x�+ԡ��kv��D|��D7G����,�����;^એ�;���D|D[��+`_e��YYm��Κ�m}	8�Av��C)"5��A�BQ����S���
�r��,���w���Q@�th��0uc-��H:�v�	ш
�yiH�y�r����۫��z�XJ��H����=�R���9�cctЗ}r�4�O�+�����`�0�� ���2Dv%�r^�By��|��e��ׯpw�|�R)�c�K+�J~�v�wgm�Xs��kl�L@�aI[�bsGw���Vb�-N^g�O��yAdxO��T��9�@���6:k����o� �KQ���|I_2$��>g�>C�G�xQ�Uhd'�Y�-~%��Q��YW��^cW�K���T+%�c�i�3#M�w�=l�pZ�1���|#o>��ao����E]hr��f�m�C��@@�7�
׊VȾ
�)f{�a�j�e
��q�2~��W����}��+���B�b� #5�ʰ�Y��JIy��M�LC�y �B��im�d(н���Q�) ��'N��Zgm�滔��&�Y� ��8&�L}"�$��f]�C�%�+� �r����]����s�΃�b�c�e���D8��Ό�����ry�qa+�2]Zq�'�Pt=�z�!h�9����L�b;a.�ݬq�L��<������.(�˙s�����4��V FU}�H	E�g>��`�zEf���"6HTf�) Kjql���d�C�"'��"�DUW���i�9�C	�D-#:�)���6Sk�]	�y,�
:��`"��{�343i��_�C� �^��.>9�aE�g|����Y�=�^��wE���`�(��� d+��$}f� �o2R��� fF��xd�S�3��V2�'�f�g�<=�m7f����9-�r��Z�c�c��c���ZZ2{���fr������\�������}�Mw$�"���M�P�#�J���<cl�i��Y+~!���J-Jo}}i��0��q9�\�k]A�+H�u�(6Ҫ�j��E��$�DFp	���B����rx#���
�cT4�;n݅�bvڋ���[N,����@b��Z�C ��7r�L�����-�z�� ��ե\J��]{�|U�xR��ʹ��/*|/țn�Fy�lOf��)>FK����1k�4��,��vB�ּ���s����+���m��k�����=����

�_�`3	�'R�ALĘA#l�r
Ř"L>+E�G�Gq���\jT���7�K�d����Bh�Wu�!@S<�ĩR�s�Ol�X�Bͯ�u@yp_!��n��|Sh'��#�9W�i�Ǩ�>����A�pr<�`H������۷ru�k Y��R����I�I���
o �sH/R�����Z����sA0�v·�/ [�Ӣ����O5h7���D�鷓,���f��P���b�(�o��8��ɲ��г`c�����N��*�s$I�n�9�D
9���)s��d � I�Y���]լ�:������L� �$ug;�f��NI�5 ���ax3�JS�x$�4�`a�	F��f�b���^{
���X�����"m?���'��V���X��%��J�f��@�լ6Q웾<�J���X�p�<�B�
�1���4�ز�9i�lF��bk������L���X��ť���Hkg��î��޳L�ఋ�������-WJ��3�!��P�F������8����d��z�ƹ�-��?ֆc��-}�!�P�dfpH��H/>-`ޤ���6ls�����mHK�G��w�x��!�,�ɇ34fp
�g�g�8�>t�lp)�N0�4 M`Q�x���8R�&�A��`��cw��%�QӾ8
G'�Z e�I�
j�s�ht���l	tӈ�i݈��,�Ԥ��kAE�c�9�Ě%#},��3q^����CS_��'!�un��O����1`;<��K�p�&�YNɌ�Q��\xl�l�b?fR�5����-�Ǧe�t����yjt�'۹�Ҡ�W��F���Ğh�k-3=�	�E�,d��2C��B-C푛��g����!B�.��>��Ω3)��N���$������dz�x�\��e�5�p�Pw����-Sf�O2t"]��F�Kk�y��L��ʎ:�Xv���֙FM�^h
�>��`��cW@+l>��
�u���m_�R��wkf�޲z��fp��t��Prv�-I�P��P�����LZ�Iyk�C�#��"ȴ�D�]��H�lyS{HzV
Y:��Jǰ���L�ľCeE�K����R�5Ĕ�'���XP�h7:-�Fj�/yb���
K��31q>�Z8g>M4�HCj��"�>B��k���ՌcaS�K���"���@h��M���Afd݇J�"(��o�QE>[S�b�����v�#�� ��f�C��%���e'p~sa�#ŏ�#Q�u�FK>א3��H͵�'&�~��w�`��T�/J�G����5����+j�8����:���>�4ӛ�s���},l$����Ñ�o�⫾Sw  �mR4�J���L?�!簯��(W�~?,�J�+�Hh�^��#$_9U̵�����M(eZ�t�Z��p�1�8��PL�1Ӿ���t�K F�;�⃒%��\��Z3��D2��fq��̆�Vi��\�u�/�l��=�$�<��bE@ZN=)e�����P��
�(���s�Щ�|���ɩ���Nƺ�P)�8p�mo5u�?CyPV37�+�'�җ, �  �E=Ů���������ɕ��^�C*��Ku�B�>�����/i\�\��2v�6�\J�`�Y�"���lºH����]o�VhluZެ���7ۺ�����;��Һ%r�e��=�/��1Q��j��m�'J��m���X�1U3 �ɚϺ��ٴ���7�Y�aX��.񕍐�_����6�u/�����c��[B,yw�uL�NC����`�@_"Q����I��I��"x�j���)���J�R�M������/,t��~=�Oa��Ο ����w$�#b��f���ht&�}2�sV{w~�<4+��-`�*��h�H��tDL�!I�Ӑ�AL�O}Z�X���B2M��ר7�#5��۶����H=�7QP��m�x�	��3�iD���Xv�H�΄MD�&�#��&����<�Ћf���
+�.�<B�Y�$�{,��V�Aj_Ȑ��{j��i"��K�!���>b�Xr��"$�;�	�\�m�a���*?Z�wF!F]��mr3����gB�X���!C!Y��A����m+�8R����(4wh`�h�$�]Yj�4�5ܐ���h���}��׏9ڷ4�,���+��A���Ҷ���O��ؚ{u횷.��d�r���j��N�:ַ��K���CZ"!�{/�/g�ʲ�
�O���J�� �W�۾=|��[�>1���* ��ұ\�zѫ��N�:4����{�;�M}G�k�P�)�i[��e�d.]p��1 ��)^\�l��~�^k���@/B�\ͥ�U!�ph�0GP$����<�u�@>+�� t��!X���	d @��~<=�� ���S_i�u���WUr<_���p�B��L�8UdTE!{�q �UP���I�T���X�{��f�}����Ry♼���	�^o�Dާ֣}�bJ>y�tU���$l@2�"c���r��qSe%�xm�$q�+T��f1`<�R��ǲB�S�\|��:NR�����y~m��#��"�4��1Q|nT���>7ַ�s�`Q�b}쎧��C�͊�����h�Koe��m�߸z��73�S��m��/l�/^%fwrYl�����;��Ղ��v�i�w���?����<�[��-���g~�3_������o�ռ�O�Qgmqԉ/�ݮ���;��<v�     