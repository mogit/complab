T=imread("input.bmp");
	
	P=T;
	k=0;
	
	for (x=1:600)
		k=k+1;
		if(T(x,55)==1)
			break;
		end
	end
	for (temp1= k+20:k+30)
		for temp2= 1:55
			P(temp1,temp2)=0;
		end
	end

	pre_y=55;
	pre_k=k;

	
		for (temp1= pre_k+20:pre_k+30)
			for temp2= 745:800
				P(temp1,temp2)=0;
			end
		end

imwrite(P,"output.bmp");
