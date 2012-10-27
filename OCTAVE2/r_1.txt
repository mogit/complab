x<-seq(from=0, to=50)
y1<-dbinom(x,50,0.3)
y2<-dpois(x,15)
y3<-dnorm(x, mean=15, sd=sqrt(10.5))
for(i in 1:length(x)){
	write(c(x[i],y1[i]),file="y1.txt",append=TRUE)
	write(c(x[i],y2[i]),file="y2.txt",append=TRUE)
	write(c(x[i],y3[i]),file="y3.txt",append=TRUE)
}
