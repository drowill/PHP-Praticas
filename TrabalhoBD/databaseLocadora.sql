CREATE TABLE tb_locacoes (
  loc_id int(11) NOT NULL,
  loc_cli_id int(11) DEFAULT NULL,
  loc_fil_id int(11) DEFAULT NULL,
  loc_dataLocacao date DEFAULT NULL,
  loc_dataDevolucao date DEFAULT NULL,
  loc_valor decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (loc_id),
  KEY loc_cli_id (loc_cli_id),
  KEY loc_fil_id (loc_fil_id),
  CONSTRAINT tb_locacoes_ibfk_1 FOREIGN KEY (loc_cli_id) REFERENCES tb_clientes (cli_id),
  CONSTRAINT tb_locacoes_ibfk_2 FOREIGN KEY (loc_fil_id) REFERENCES tb_filmes (fil_id)
) 

CREATE TABLE tb_filmes (
  fil_id int(11) NOT NULL,
  fil_titulo varchar(100) DEFAULT NULL,
  fil_anoLancamento int(11) DEFAULT NULL,
  fil_disponivel tinyint(1) DEFAULT NULL,
  PRIMARY KEY (fil_id))


CREATE TABLE tb_clientes (
  cli_id int(11) NOT NULL,
  cli_nome varchar(100) DEFAULT NULL,
  cli_telefone varchar(15) DEFAULT NULL,
  PRIMARY KEY (cli_id)
)

delimiter \\
CREATE FUNCTION fun_calcularMulta(dataDevolcaoPrevista date, dataDevolucao date) RETURNS decimal(6,2)
begin
	set @multa = 0;
    if dataDevolucao > dataDevolcaoPrevista then set @multa = (datediff(dataDevolucao, dataDevolcaoPrevista) *0.5);
    end if;
    return @multa;
end \\
delimiter ;

delimiter \\
create trigger tg_atualizarStatus after insert on tb_locacoes for each row
begin
	update tb_filmes set fil_disponivel = false where fil_id = new.loc_fil_id;
end \\
delimiter ;

INSERT INTO tb_clientes (cli_id, cli_nome, cli_telefone)
VALUES
    (1, 'João Silva', '123-456-7890'),
    (2, 'Maria Oliveira', '987-654-3210'),
    (3, 'Pedro Santos', '555-123-4567');

INSERT INTO tb_filmes (fil_id, fil_titulo, fil_anoLancamento, fil_disponivel)
VALUES
    (1, 'Branca de neve', 1937, TRUE),
    (2, 'Poderoso Chefão', 1972, TRUE),
    (3, 'Barbie', 2023, TRUE);
