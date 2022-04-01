
CREATE TABLE localizacao (
                cep VARCHAR(8) NOT NULL,
                uf VARCHAR(2) DEFAULT MG NOT NULL,
                cidade VARCHAR(50) NOT NULL,
                bairro VARCHAR(50) NOT NULL,
                rua VARCHAR(50) NOT NULL,
                numero INT NOT NULL,
                PRIMARY KEY (cep)
);


CREATE TABLE empresa (
                ident_empresa VARCHAR(14) NOT NULL,
                cep VARCHAR(8) NOT NULL,
                razao_social VARCHAR(100) NOT NULL,
                PRIMARY KEY (ident_empresa)
);


CREATE TABLE cliente (
                ident_cliente VARCHAR(14) NOT NULL,
                valor DOUBLE PRECISION NOT NULL,
                nome VARCHAR(50) NOT NULL,
                descricao VARCHAR(100) NOT NULL,
                natureza_juridica VARCHAR(50) NOT NULL,
                PRIMARY KEY (ident_cliente, valor)
);


CREATE TABLE pagamento (
                ident_cliente VARCHAR(14) NOT NULL,
                valor DOUBLE PRECISION NOT NULL,
                data_pagamento DATE NOT NULL,
                mes_competencia DATE NOT NULL,
                credito DOUBLE PRECISION NOT NULL,
                forma_pagamento VARCHAR NOT NULL,
                PRIMARY KEY (ident_cliente, valor)
);


CREATE TABLE gerar_relatorio (
                id_pagamento INT AUTO_INCREMENT NOT NULL,
                ident_cliente VARCHAR(14) NOT NULL,
                valor DOUBLE PRECISION NOT NULL,
                PRIMARY KEY (id_pagamento)
);


CREATE TABLE gerar_honorario (
                ident_empresa VARCHAR(14) NOT NULL,
                ident_cliente VARCHAR(14) NOT NULL,
                valor DOUBLE PRECISION NOT NULL,
                data_ref DATE NOT NULL,
                PRIMARY KEY (ident_empresa, ident_cliente, valor)
);


ALTER TABLE empresa ADD CONSTRAINT localizacao_empresa_fk
FOREIGN KEY (cep)
REFERENCES localizacao (cep)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE gerar_honorario ADD CONSTRAINT empresa_gerar_honorario_fk
FOREIGN KEY (ident_empresa)
REFERENCES empresa (ident_empresa)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE gerar_honorario ADD CONSTRAINT cliente_gerar_honorario_fk
FOREIGN KEY (ident_cliente, valor)
REFERENCES cliente (ident_cliente, valor)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE pagamento ADD CONSTRAINT cliente_pagamento_fk
FOREIGN KEY (ident_cliente, valor)
REFERENCES cliente (ident_cliente, valor)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE gerar_relatorio ADD CONSTRAINT pagamento_gerar_relatorio_fk
FOREIGN KEY (ident_cliente, valor)
REFERENCES pagamento (ident_cliente, valor)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
