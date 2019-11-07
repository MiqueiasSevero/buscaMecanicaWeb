use bd_buscamecanica;


SELECT relaizaSevico.id_serv_realizado, relaizaSevico.fk_id_oferece_servico, oferece_servico.nome_serv,nome_oficina
  FROM tbl_sevicos_realizados AS relaizaSevico INNER JOIN tbl_oferece_servicos AS oferece_servico ON relaizaSevico.fk_id_oferece_servico = oferece_servico.id_oferece_servico;

