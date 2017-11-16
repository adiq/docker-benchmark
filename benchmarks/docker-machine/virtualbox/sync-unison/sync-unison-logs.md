# VirtualBox & Unison

Logs:
```
$ dumbbench --precision 0.80 --initial 10 --maxiter 100 --float -- docker exec -it syncunison_vbox-benchmark-sync-unison_1 time dd if=/dev/zero of=/var/test/test.dat bs=1024 count=100000
100000+0 records in
100000+0 records out
real	0m 0.26s
user	0m 0.02s
sys	0m 0.24s
100000+0 records in
100000+0 records out
real	0m 0.40s
user	0m 0.03s
sys	0m 0.24s
100000+0 records in
100000+0 records out
real	0m 0.34s
user	0m 0.02s
sys	0m 0.28s
100000+0 records in
100000+0 records out
real	0m 0.31s
user	0m 0.00s
sys	0m 0.26s
100000+0 records in
100000+0 records out
real	0m 0.32s
user	0m 0.01s
sys	0m 0.25s
100000+0 records in
100000+0 records out
real	0m 0.35s
user	0m 0.03s
sys	0m 0.29s
100000+0 records in
100000+0 records out
real	0m 0.34s
user	0m 0.01s
sys	0m 0.31s
100000+0 records in
100000+0 records out
real	0m 0.30s
user	0m 0.01s
sys	0m 0.25s
100000+0 records in
100000+0 records out
real	0m 0.42s
user	0m 0.01s
sys	0m 0.30s
100000+0 records in
100000+0 records out
real	0m 0.30s
user	0m 0.01s
sys	0m 0.27s
100000+0 records in
100000+0 records out
real	0m 0.32s
user	0m 0.01s
sys	0m 0.29s
cmd: Ran 10 iterations (0 outliers).
cmd: Rounded run time per iteration: 0.520000 +/- 0.013000 (2.4%)```