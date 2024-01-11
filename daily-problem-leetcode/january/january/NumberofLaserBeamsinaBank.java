package january;

class NumberofLaserBeamsinaBank {
    public int numberOfBeams(String[] bank) {
        int prev=0;
        int lesser=0;
        for(int i=0;i<bank.length;i++)
        {
            int count=0;
            for(int j=0;j<bank[i].length();j++)
            {
                
                if(bank[i].charAt(j)=='1')
                {
                    count++;
                }
            }
            // System.out.println(count);
            if(count >0)
            {
                lesser+=prev*count;
                prev=count;
            }
        }
        return lesser;
    }
}