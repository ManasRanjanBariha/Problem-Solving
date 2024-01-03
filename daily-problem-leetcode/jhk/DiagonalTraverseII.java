class Solution {
    public int[] findDiagonalOrder(List<List<Integer>> nums) {
        int d=0;
        int s=0;
        for(int i=0;i<nums.size();i++)
        {
            d=Math.max(i+nums.get(i).size(),d);
            s+=nums.get(i).size();
        }
        List<List<Integer>> buckets = new ArrayList<>();
        for(int i=0;i<d;i++)
        {
            buckets.add(new ArrayList<Integer>());
        }

        int bIndex=0;
        for(List<Integer> ls :nums)
        {
            int index=bIndex;
            for(int m:ls)
            {
                
                buckets.get(index).add(m);
                index++;
            }
            bIndex++;
        }
        int []output=new int[s];
        int i=0;
        for(List<Integer>ls:buckets)
        {
            
            for(int j=ls.size()-1;j>=0;j--)
            {
                output[i]=ls.get(j);
                i++;
            }
        }
        return output;
    }
}