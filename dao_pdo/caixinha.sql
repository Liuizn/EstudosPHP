CREATE TABLE caixinhas (
  id mediumint(8) unsigned NOT NULL auto_increment,
  ID_Cliente mediumint default NULL,
  Sequencial mediumint default NULL,
  Nome TEXT default NULL,
  Meta varchar(100) default NULL,
  Atual varchar(100) default NULL,
  Prazo_Inicial varchar(255),
  Prazo_Final varchar(255),
  Status varchar(255) default NULL,
  PRIMARY KEY (id)
) AUTO_INCREMENT=1;

INSERT INTO caixinhas (ID_Cliente,Sequencial,Nome,Meta,Atual,Prazo_Inicial,Prazo_Final,Status)
VALUES
  (161,41,"sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id","86732.68","12157.66","2022-10-29","2023-02-21","0"),
  (7,80,"arcu. Vestibulum ante ipsum primis in faucibus orci luctus et","18099.94","21569.19","2021-12-29","2022-07-02","0"),
  (101,121,"ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices,","41163.97","50014.20","2023-11-16","2022-09-30","1"),
  (27,17,"ac nulla. In tincidunt congue turpis. In condimentum. Donec at","98785.52","19427.10","2022-04-08","2023-10-30","1"),
  (166,197,"Nullam ut nisi a odio semper cursus. Integer mollis. Integer","20784.68","60439.26","2023-04-17","2022-08-29","1"),
  (5,73,"semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim","71244.74","15212.84","2023-10-08","2023-12-03","0"),
  (131,193,"erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum","66815.41","95066.68","2023-03-19","2022-02-21","1"),
  (144,2,"nunc sed libero. Proin sed turpis nec mauris blandit mattis.","57514.09","35435.35","2022-02-02","2022-08-12","1"),
  (71,50,"non magna. Nam ligula elit, pretium et, rutrum non, hendrerit","7875.04","79297.72","2022-02-07","2023-02-01","0"),
  (91,128,"auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi","21348.44","31949.49","2023-07-31","2023-07-31","1");
INSERT INTO caixinhas (ID_Cliente,Sequencial,Nome,Meta,Atual,Prazo_Inicial,Prazo_Final,Status)
VALUES
  (23,4,"non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet,","1921.40","75270.77","2023-06-04","2022-12-26","1"),
  (74,125,"amet nulla. Donec non justo. Proin non massa non ante","88077.88","47343.82","2023-08-06","2022-01-09","1"),
  (75,178,"tempus non, lacinia at, iaculis quis, pede. Praesent eu dui.","49823.33","40553.25","2023-12-06","2023-05-28","1"),
  (43,123,"et ultrices posuere cubilia Curae Donec tincidunt. Donec vitae erat","87354.44","71894.25","2022-11-27","2022-04-27","0"),
  (89,12,"mus. Proin vel arcu eu odio tristique pharetra. Quisque ac","15416.91","79669.84","2023-03-11","2022-08-23","1"),
  (137,84,"Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus","15618.11","21164.24","2022-02-24","2023-09-07","1"),
  (60,55,"metus. Aenean sed pede nec ante blandit viverra. Donec tempus,","21694.90","71791.24","2023-11-24","2022-09-04","0"),
  (59,13,"sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis","81168.27","87271.90","2023-02-13","2022-10-09","1"),
  (142,167,"dictum sapien. Aenean massa. Integer vitae nibh. Donec est mauris,","86118.03","80114.25","2023-03-28","2022-03-01","1"),
  (90,23,"felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem,","20598.02","2336.44","2023-03-22","2022-06-05","1");
INSERT INTO caixinhas (ID_Cliente,Sequencial,Nome,Meta,Atual,Prazo_Inicial,Prazo_Final,Status)
VALUES
  (77,64,"ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam","44353.90","73218.58","2023-04-07","2023-10-06","1"),
  (185,42,"Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut","63746.23","43750.13","2022-04-03","2023-07-14","1"),
  (112,140,"lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis","54323.60","98086.41","2022-08-05","2023-08-03","1"),
  (14,77,"dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas","81134.97","60294.01","2022-07-17","2023-02-06","0"),
  (16,5,"nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet.","35354.03","66893.90","2023-08-27","2022-08-29","1"),
  (140,49,"Sed id risus quis diam luctus lobortis. Class aptent taciti","38011.63","23404.26","2022-10-11","2022-03-25","0"),
  (65,144,"diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer","52254.42","33981.65","2022-04-06","2022-07-07","0"),
  (1,60,"tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed","46829.76","79041.29","2022-10-24","2022-02-06","1"),
  (88,92,"quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus","4532.16","16887.23","2022-12-11","2023-02-10","0"),
  (17,177,"Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna.","36000.35","46730.11","2023-12-05","2022-09-23","0");
INSERT INTO caixinhas (ID_Cliente,Sequencial,Nome,Meta,Atual,Prazo_Inicial,Prazo_Final,Status)
VALUES
  (56,60,"id risus quis diam luctus lobortis. Class aptent taciti sociosqu","49261.42","25957.52","2023-08-27","2023-05-30","1"),
  (69,83,"arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi.","97081.71","16681.46","2022-11-21","2023-01-20","0"),
  (15,73,"eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus","12925.78","91321.76","2022-06-21","2022-10-04","0"),
  (114,15,"venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing","59232.52","56894.47","2023-11-28","2022-07-28","1"),
  (120,190,"commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus","52825.42","55675.10","2023-06-19","2023-07-03","0"),
  (148,70,"ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae,","60226.30","93723.07","2022-10-16","2023-05-10","0"),
  (22,130,"bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna","43782.21","63269.90","2021-12-22","2022-03-05","1"),
  (68,54,"porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor","21573.45","91181.08","2022-01-02","2023-01-03","1"),
  (13,115,"risus. In mi pede, nonummy ut, molestie in, tempus eu,","40826.78","9384.20","2023-08-30","2022-01-09","1"),
  (106,97,"Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit,","66542.26","98140.32","2022-04-19","2023-11-18","0");
INSERT INTO caixinhas (ID_Cliente,Sequencial,Nome,Meta,Atual,Prazo_Inicial,Prazo_Final,Status)
VALUES
  (41,167,"posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget,","50468.80","64870.27","2022-08-16","2022-09-13","1"),
  (119,32,"Nam interdum enim non nisi. Aenean eget metus. In nec","96968.69","45353.46","2023-07-17","2023-06-27","0"),
  (32,151,"Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero mauris,","20739.74","17864.52","2022-07-09","2022-05-21","1"),
  (69,137,"quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam","80224.62","12057.27","2023-04-09","2023-02-23","0"),
  (140,165,"at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam","34983.36","92052.02","2022-01-20","2023-02-25","0"),
  (130,155,"ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam","15098.58","43.47","2023-05-14","2023-10-20","1"),
  (71,193,"feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam","31150.79","51933.49","2023-02-15","2022-01-06","1"),
  (20,4,"vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum.","32190.74","34801.17","2023-07-08","2021-12-23","0"),
  (121,179,"congue turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum","50138.06","67657.59","2023-11-07","2023-09-27","0"),
  (18,27,"ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et","94958.33","87330.68","2022-06-25","2022-11-15","1");
INSERT INTO caixinhas (ID_Cliente,Sequencial,Nome,Meta,Atual,Prazo_Inicial,Prazo_Final,Status)
VALUES
  (45,39,"commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac,","70994.83","94839.90","2023-05-27","2022-06-13","0"),
  (189,22,"Phasellus elit pede, malesuada vel, venenatis vel, faucibus id, libero.","50076.73","18026.14","2022-06-16","2023-06-02","0"),
  (65,70,"nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque","33735.76","907.49","2023-04-18","2022-09-25","1"),
  (191,39,"Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla.","26728.95","61899.98","2022-09-16","2022-05-21","1"),
  (156,53,"fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin","63175.55","6678.36","2022-07-26","2023-07-19","0"),
  (136,95,"imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec,","3173.67","49019.46","2022-02-01","2022-07-17","1"),
  (48,74,"quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis.","10908.89","86786.98","2023-05-27","2023-11-07","1"),
  (22,19,"a nunc. In at pede. Cras vulputate velit eu sem.","39486.90","71977.00","2022-08-11","2022-12-04","1"),
  (38,179,"Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus,","64283.85","38117.06","2023-12-05","2022-04-28","0"),
  (165,183,"semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In","4301.67","59032.24","2021-12-31","2022-09-19","1");
INSERT INTO caixinhas (ID_Cliente,Sequencial,Nome,Meta,Atual,Prazo_Inicial,Prazo_Final,Status)
VALUES
  (39,25,"penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin","34947.46","28591.26","2022-02-26","2023-02-10","0"),
  (50,177,"ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna.","22040.69","73766.73","2022-11-03","2022-02-28","1"),
  (108,66,"ut nisi a odio semper cursus. Integer mollis. Integer tincidunt","13817.49","94099.61","2023-07-23","2022-12-12","0"),
  (30,195,"Maecenas libero est, congue a, aliquet vel, vulputate eu, odio.","74333.50","98696.93","2023-01-01","2023-06-27","0"),
  (84,34,"lacus. Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum","43329.69","54513.26","2022-11-17","2023-04-03","1"),
  (88,104,"pellentesque, tellus sem mollis dui, in sodales elit erat vitae","12772.33","25011.38","2022-08-10","2022-11-04","0"),
  (136,85,"nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce","99969.99","58467.04","2022-06-06","2023-04-09","0"),
  (92,142,"non enim. Mauris quis turpis vitae purus gravida sagittis. Duis","1820.50","70951.54","2022-02-04","2022-10-29","0"),
  (70,170,"semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae","5451.38","76154.35","2021-12-18","2023-06-01","0"),
  (170,85,"tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio.","21297.93","21471.13","2022-09-06","2022-12-01","1");
INSERT INTO caixinhas (ID_Cliente,Sequencial,Nome,Meta,Atual,Prazo_Inicial,Prazo_Final,Status)
VALUES
  (30,105,"dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies","60484.80","67146.46","2022-03-15","2022-10-24","1"),
  (162,47,"venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing","93361.27","24559.26","2023-11-06","2023-10-05","0"),
  (33,64,"urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus","55349.54","68861.07","2023-02-09","2023-09-13","0"),
  (11,5,"vitae nibh. Donec est mauris, rhoncus id, mollis nec, cursus","42255.30","97820.37","2023-03-23","2021-12-29","0"),
  (119,66,"Donec nibh enim, gravida sit amet, dapibus id, blandit at,","39244.90","51537.86","2022-08-22","2023-03-29","1"),
  (112,83,"Duis cursus, diam at pretium aliquet, metus urna convallis erat,","13857.15","24432.71","2022-11-25","2022-07-28","0"),
  (99,186,"ultrices posuere cubilia Curae Donec tincidunt. Donec vitae erat vel","50622.77","95440.80","2022-07-27","2022-04-25","0"),
  (167,49,"neque et nunc. Quisque ornare tortor at risus. Nunc ac","200.05","97200.07","2022-01-29","2023-04-15","0"),
  (145,13,"dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc","48205.96","90732.40","2022-10-15","2023-07-04","0"),
  (55,34,"Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla","39644.98","70761.98","2023-07-01","2022-03-09","0");
INSERT INTO caixinhas (ID_Cliente,Sequencial,Nome,Meta,Atual,Prazo_Inicial,Prazo_Final,Status)
VALUES
  (87,30,"arcu. Curabitur ut odio vel est tempor bibendum. Donec felis","14765.11","69341.71","2021-12-27","2022-03-23","0"),
  (178,183,"Ut semper pretium neque. Morbi quis urna. Nunc quis arcu","32867.82","24408.93","2023-01-11","2023-01-05","0"),
  (37,187,"Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper","51892.20","66091.87","2023-05-24","2023-03-27","0"),
  (176,35,"elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis","54300.37","99728.87","2022-03-02","2023-11-12","0"),
  (161,100,"mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet,","37822.85","75482.75","2023-09-15","2022-09-21","1"),
  (122,92,"ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed","6176.10","63036.51","2023-04-12","2022-03-12","0"),
  (120,39,"orci, consectetuer euismod est arcu ac orci. Ut semper pretium","63882.67","52668.80","2023-04-19","2022-06-04","0"),
  (6,81,"posuere cubilia Curae Donec tincidunt. Donec vitae erat vel pede","67647.28","640.61","2022-12-26","2023-08-24","0"),
  (80,46,"purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam","62844.55","57733.60","2023-08-21","2022-10-22","1"),
  (141,181,"quis, pede. Praesent eu dui. Cum sociis natoque penatibus et","608.83","59590.81","2022-10-30","2022-04-06","0");
INSERT INTO caixinhas (ID_Cliente,Sequencial,Nome,Meta,Atual,Prazo_Inicial,Prazo_Final,Status)
VALUES
  (72,141,"Class aptent taciti sociosqu ad litora torquent per conubia nostra,","41600.63","22453.20","2022-08-27","2023-01-07","1"),
  (58,42,"orci. Ut semper pretium neque. Morbi quis urna. Nunc quis","18830.94","4099.70","2023-07-08","2023-10-01","0"),
  (181,81,"et libero. Proin mi. Aliquam gravida mauris ut mi. Duis","65001.91","12224.60","2023-05-16","2023-07-19","1"),
  (69,66,"dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit eget","88266.15","45728.73","2022-10-14","2022-11-09","0"),
  (125,22,"nisl arcu iaculis enim, sit amet ornare lectus justo eu","77965.18","61845.77","2022-07-16","2021-12-29","1"),
  (116,200,"lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante","51593.55","5405.22","2022-03-24","2023-11-18","0"),
  (156,71,"ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget","10054.86","72539.63","2023-05-15","2022-01-17","0"),
  (112,85,"tellus faucibus leo, in lobortis tellus justo sit amet nulla.","62683.77","51522.51","2022-04-17","2023-07-06","0"),
  (8,59,"nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus","73895.25","6763.68","2022-10-29","2023-06-28","0"),
  (133,186,"pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien,","44473.93","47057.73","2022-07-01","2022-08-17","0");
