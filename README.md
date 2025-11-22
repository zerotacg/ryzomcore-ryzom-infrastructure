# ryzomcore-ryzom-infrastructure

## preparation

get required data

```bash
curl --location --output data/sheet_id.bin https://github.com/ryzom/ryzomcore_leveldesign/raw/refs/heads/core4/game_elem/sheet_id.bin
curl --location --output data/world_editor_classes.xml https://github.com/ryzom/ryzomcore/raw/refs/heads/core4/ryzom/common/data_leveldesign/leveldesign/world_editor_files/world_editor_classes.xml
curl --location --output data/egs/client_commands_privileges_open.txt https://github.com/ryzom/ryzomcore/raw/refs/heads/core4/ryzom/server/data_shard/egs/client_commands_privileges_open.txt
curl --location --output data/common/msg.xml       https://github.com/ryzom/ryzomcore/raw/refs/heads/core4/ryzom/common/data_common/msg.xml
curl --location --output data/common/database.xml https://github.com/ryzom/ryzomcore/raw/refs/heads/core4/ryzom/common/data_common/database.xml
```

## startup

start docker containers

```bash
docker compose up
```

update shard to `ryzom_dev` application

```sql
update shard
set ClientApplication = 'ryzom_dev'
where ShardId = '500';
```

update domain configuration

```sql
use nel;
update domain
set login_address = 'login-service:43999'
where domain_name = 'ryzom_dev';
```

## cleanup

```bash
docker compose down --volumes --remove-orphans
```

## TODO

- [ ] Fix php errors on login
- [ ] Fix error on new address for welcome service

## required data

- sheet_id.bin
- gpm-service
  - .datasets.packed_sheets, ...
  - msg.xml
  - world_editor_classes.xml
- entities-game-service
  - client_commands_privileges_open.txt
- frontend-service
  - database.xml
